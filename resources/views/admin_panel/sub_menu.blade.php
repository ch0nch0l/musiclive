@extends('admin_panel.main')
@section('body')    
<br>
<div class="col-sm-12">
 
    <div class="col-sm-6">
        <br>
                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModa2">Add New Sub-menu</button>
               
            <br>
        </div>
<div class="col-sm-12">
    @include('admin_panel.layout.partials.errors') 
    @include('admin_panel.layout.partials.session')
</div>


<div class="col-sm-12">
    <table class="table table-responsive table-bordered">
        <tr>
            <th class="text-center">Sub Menu Name</th>
            <th class="text-center">Sub menu URL</th>
            <th class="text-center">Main Menu Id</th>
            <th class="text-center">Entry By</th>
            
            <th class="text-center">Modified By</th>
            
            <th class="text-center">Created At</th>
            
            <th class="text-center">Modified At</th>
            <th class="text-center">Action</th>
        </tr>
        @forelse ($sub_menus as $item)
        <tr>
        <td class="text-center">{{$item->sub_menu_name}}</td>
        <td class="text-center">{{$item->sub_menu_url}}</td>
        
        <td class="text-center">{{\DB::table('menus')->where('id', $item->main_menu_id)->value('menu_name')}}</td>
        @php
           $name = \DB::table('users')->where('id', $item->entry_by)->value('name');
           $m_name = \DB::table('users')->where('id', $item->modify_by)->value('name');
        @endphp    
        <td class="text-center">{{$name}}</td>
        <td class="text-center">{{$m_name}}</td>
        <td class="text-center">{{$item->created_at->diffForHumans()}}</td>
            <td class="text-center">{{$item->updated_at->diffForHumans()}}</td>
            
            <td class="text-center">
                
                <button class="btn btn-info" type="submit" data-target="#exampleModa{{$item->id}}" data-toggle="modal"><span class="fa fa-edit"></span></button>
           
            </td>
        </tr>
        @empty
        <tr>
                
         <h3 class="text-danger">No Records</h3>
                  
        </tr>
        
        
        @endforelse
        
    </table>
    
</div>
{{--  add new sub menus  --}}
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="sub_menu" method="post">
                    @csrf
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sub_menu_name">Sub Menu Name</label>
                            <div class="col-md-9">
                                <input id="sub_menu_name" name="sub_menu_name" type="text" class="form-control">
                                <input type="hidden" name="entry_by" id="entry_by" value="{{ Auth::user()->id }} ">
                                <input type="hidden" name="modify_by" id="modify_by" value=" ">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sub_menu_url">Sub Menu Url</label>
                            <div class="col-md-9">
                                <input id="sub_menu_url" name="sub_menu_url" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="main_menu_id">Main Menu ID</label>
                            <div class="col-md-9">
                                @php
                                    $main_menu_id = \DB::table('menus')->get()
                                @endphp
                               <select name="main_menu_id" id="main_menu_id" class="form-control">
                                @foreach ($main_menu_id as $itemss)
                               <option value="{{$itemss->id}}">{{$itemss->menu_name}} - [Status: {{ucfirst($itemss->status)}}]</option>
                                @endforeach
                               </select>
                               
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Status</label>
                            <div class="col-md-9">
                                <select name="status" id="status" class="col-sm-3 form-control">
                                   
                                    <option value="active">Active</option>
                                    <option value="deactive">Deactive</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="icon">Icon</label>
                            <div class="col-md-9">
                                <input type="text" name="icon" id="icon" class="form-control">
                            </div>
                        </div>

                       
                        <!-- Message body -->

                    </fieldset>

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--  add new sub menus  --}}
{{--  Edit Sub Menus  --}}
@foreach ($sub_menus as $itemsss)
<div class="modal fade" id="exampleModa{{$itemsss->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" action="sub_menu/{{$itemsss->id}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sub_menu_name">Sub Menu Name</label>
                            <div class="col-md-9">
                                <input id="sub_menu_name" name="sub_menu_name" type="text" value="{{$itemsss->sub_menu_name}}" class="form-control">

                                <input type="hidden" name="modify_by" id="modify_by" value="{{ Auth::user()->id }}">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sub_menu_url">Sub Menu Url</label>
                            <div class="col-md-9">
                                <input id="sub_menu_url" name="sub_menu_url" type="text" class="form-control" value="{{$itemsss->sub_menu_url}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="main_menu_id">Main Menu ID</label>
                            <div class="col-md-9">
                                @php
                                    $main_menu_id = \DB::table('menus')->get()
                                @endphp
                               <select name="main_menu_id" id="main_menu_id" class="form-control">
                                @foreach ($main_menu_id as $itemss)
                               <option {{($itemss->id==$itemsss->main_menu_id)?"selected":""}} value="{{$itemss->id}}">{{$itemss->menu_name}}</option>
                                @endforeach
                               </select>
                               
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Status</label>
                            <div class="col-md-9">
                                <select name="status" id="status" class="col-sm-3 form-control">
                                   
                                    <option value="active" {{ ( $itemsss->status=="active" ) ? 'selected' : '' }}>Active</option>
                                    <option value="deactive"  {{ ( $itemsss->status=="deactive" ) ? 'selected' : '' }}>Deactive</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="icon">Icon</label>
                            <div class="col-md-9">
                            <input type="text" name="icon" id="icon" value="{{$itemsss->icon}}" class="form-control">
                            </div>
                        </div>
                        <!-- Message body -->

                    </fieldset>

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--  Edit Sub Menus  --}}
@endsection