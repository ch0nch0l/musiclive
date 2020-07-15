
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    @if (Auth::user()->role_id=="Admin")
          @php
              $main_menu = DB::table('menus')->where('status' ,'active' )->get();
          @endphp  
    @else
    @php

    $main_menu = DB::table('menu_permissions')
         ->join('menus', 'menus.id', '=', 'menu_permissions.main_menu_id')
         ->join('sub_menus', 'sub_menus.id', '=', 'menu_permissions.sub_menu_id')
         ->join('users', 'users.id', '=', 'menu_permissions.user_id')
         ->select('menus.*', 'menu_permissions.*')
         ->where([
                     ['menu_permissions.user_id', '=', Auth::user()->id],  
                     ['menus.status', 'like', 'active']
                    
                     ])
         ->groupby('menu_permissions.main_menu_id')
         ->get();
    
    
     
     
 @endphp 
    @endif
    
   
    
    <ul class="nav menu">
        <li {{{ (Request::is('admin_panel') ? 'class=active' : '') }}} ><a href="admin_panel"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
       
        {{-- <li {{{ (Request::is('product') ? 'class=active' : '') }}}><a href="product"><em class="fa fa-plane">&nbsp;</em> Product</a></li> --}}
    @foreach ($main_menu as $item)
    
    <li class="parent "><a data-toggle="collapse" href="#{{$item->menu_url}}"  >
        <em class="fa {{$item->icon}}">&nbsp;</em>{{$item->menu_name}} <span data-toggle="collapse" href="#{{$item->menu_name}}" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="{{$item->menu_url}}">
            @if (Auth::user()->role_id=="Admin")
          @php
        $sub_menu = DB::table('sub_menus')
        ->where('main_menu_id', $item->id)
        ->get();
          @endphp  
        @else
        @php
         
        $sub_menu = DB::table('menu_permissions')
       ->join('sub_menus', 'sub_menus.id', '=', 'menu_permissions.sub_menu_id')
       ->join('users', 'users.id', '=', 'menu_permissions.user_id')
       ->select('sub_menus.*', 'menu_permissions.*')
       ->where([
                   ['menu_permissions.user_id', '=', Auth::user()->id],  
                   ['sub_menus.main_menu_id', '=', $item->main_menu_id],
                   ['sub_menus.status', 'like', 'active']
                   ])
       ->groupby('sub_menus.id')
       ->get();
     @endphp 
        @endif
       
            @foreach ($sub_menu as $item_sub)
            <li><a href="{{$item_sub->sub_menu_url}}"><em class="fa {{$item_sub->icon}}">&nbsp;</em>{{$item_sub->sub_menu_name}}</a></li>    
            @endforeach
            
           
        </ul>
    </li>
    @endforeach
    @if (Auth::user()->role_id=="Admin")
    <li class="parent "><a data-toggle="collapse" href="#sub-item-1" {{ (Request::is('user') ? 'class=active' : '') }} >
            <em class="fa fa-navicon">&nbsp;</em> Setup <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a href="user"><em class="fa fa-user">&nbsp;</em> User Panel</a></li>
                <li><a class="" href="menu">
                    <span class="fa fa-list">&nbsp;</span> Menu
                </a></li>
                <li><a class="" href="sub_menu">
                    <span class="fa fa-angle-right">&nbsp;</span>Sub Menu
                </a></li>
                <li><a class="" href="menu_permission">
                    <span class="fa fa-ban">&nbsp;</span>Menu Permission
                </a></li>
            </ul>
        </li>
    @endif   
   
       
    </ul>
</div><!--/.sidebar-->