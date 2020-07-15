@extends('admin_panel.main')
@section('body')

<div class="col-sm-6">
    <br>
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Add New Menu</button>
</div>


<div class="col-sm-12 col-xs-12">
    
@include('admin_panel.layout.partials.errors') 
@include('admin_panel.layout.partials.session')
<br>
    <table class="table table-bordered table-responsive table-hovered">
    <tr>
        <th colspan="9" class="text-center"><h4>Menu table</h4></th>
    </tr>
        <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Menu Name</th>
        <th class="text-center">Menu Url</th>
        <th class="text-center">Time</th>
        <th class="text-center">Entry By</th>
        
        <th class="text-center">Modify By</th>
        <th class="text-center">Status</th>
        <th class="text-center" >Action</th>
    </tr>
    @foreach ($menus as $item)
        
    <tr>
        <td class="text-center">{{$item->id}}</td>
        <td class="text-center">{{$item->menu_name}}</td>
        <td class="text-center">{{$item->menu_url}}</td>
        <td class="text-center">{{$item->created_at->diffForHumans()}}</td>
    
    @php
        $name = \DB::table('users')->where('id', $item->entry_by)->value('name');
    @endphp    
        <td class="text-center">{{$name}}</td>
         @php
        $name1 = \DB::table('users')->where('id', $item->modify_by)->value('name');
    @endphp    
        <td class="text-center">{{$name1}}</td>
        <td class="text-center">{{ucfirst($item->status)}}</td>
    <td class="text-center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->id}}" id="update_btn"><span class="fa fa-edit"></span></button></td>
        
        
    </tr>
    
    @endforeach
</table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="create_menu" method="post">
                    @csrf
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Menu Name</label>
                            <div class="col-md-9">
                                <input id="menu_name" name="menu_name" type="text" class="form-control">
                                <input type="hidden" name="entry_by" id="entry_by" value="{{ Auth::user()->id }} ">
                                <input type="hidden" name="modify_by" id="modify_by" value="{{ Auth::user()->id }} ">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="menu_url">Menu Url</label>
                            <div class="col-md-9">
                                <input id="menu_url " name="menu_url" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Status</label>
                            <div class="col-md-9">
                                <select name="status" id="status" class="col-sm-3 form-control">
                                   
                                    <option value="1">Active</option>
                                    <option value="2">Deactive</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Font Awesome Icons</label>
                            <div class="col-md-9">
                            <input type="text" name="icon" id="icon" class="form-control" >
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
{{--  update modal  --}}
@foreach ($menus as $items)
    

<div class="modal fade" id="exampleModal{{$items->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="update/{{$items->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Menu Name</label>
                                <div class="col-md-9">
                                <input id="menu_name" name="menu_name" type="text" value="{{$items->menu_name}}" class="form-control">
                                   <input type="hidden" name="modify_by" id="modify_by" value="{{ Auth::user()->id }} ">
                                </div>
                            </div>
    
                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="menu_url">Menu Url</label>
                                <div class="col-md-9">
                                <input id="menu_url " name="menu_url" value="{{$items->menu_url}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="status">Status</label>
                                <div class="col-md-9">
                                    <select name="status" id="status" class="col-sm-3 form-control">
                                       
                                        <option value="active" {{ ( $items->status=="active" ) ? 'selected' : '' }}>Active</option>
                                        <option value="deactive"  {{ ( $items->status=="deactive" ) ? 'selected' : '' }}>Deactive</option>
    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="status">Font Awesome Icons</label>
                                <div class="col-md-9">
                                <input type="text" name="icon" id="icon" class="form-control" value="{{$items->icon}}" >
                                </div>
                            </div>
                            <!-- Message body -->
    
                        </fieldset>
    
                </div>
                <div class="modal-footer">
    
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach


@endsection