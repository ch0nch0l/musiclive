@extends('admin_panel.main')
@section('body')
<div class="col-sm-12">
    <br>
    @include('admin_panel.layout.partials.errors') 
    @include('admin_panel.layout.partials.session')
</div>

<div class="col-sm-12">
<br>
<button type="button" class="btn btn-{{$status->set_color()}} btn-block" data-toggle="modal" data-target="#exampleModal">Add New Packages</button>
</div>


<div class="col-sm-12 col-xs-12 automove"  >
<br>

    <table class="table table-responsive table-hover table-bordered">
    <tr>
        <th colspan="16" class="text-center"><h4>Packages list</h4></th>
    </tr>
        <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Packages Name</th>
        <th class="text-center">Actual Cost</th>
        <th class="text-center">Sale Cost</th>
        <th class="text-center">Duration</th>
        <th class="text-center">Duration Unit</th>
        <th class="text-center">Details</th>
        <th class="text-center">Playback Limit</th>
        <th class="text-center">Status</th>
        <th class="text-center">Created At</th>
        <th class="text-center">Updated At</th>
        <th class="text-center">Action</th>
    </tr>
    
    @forelse ($plans as $key=> $item)
        
    <tr>
        <td class="text-center">{{++$key}}</td>
        <td class="text-center">{{$item->plan_name}}</td>
        <td class="text-center">{{$item->actual_cost}}</td>
        <td class="text-center">{{$item->sale_cost}}</td>
        <td class="text-center">{{$item->duration}}</td>
        <td class="text-center">{{$item->duration_unit}}</td>
        <td class="text-center">{{$item->details}}</td>
        <td class="text-center">{{$item->playback_limit}}</td>
        <td class="text-center">{{{($item->status==1)?"Active":"In active"}}}</td>
        <td class="text-center">{{$item->created_at}}</td>
        <td class="text-center">{{$item->updated_at}}</td>

    <td class="text-center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->id}}" id="update_btn"><span class="fa fa-edit"></span></button></td>
    </tr>
    @empty
    <tr>
        <td class="text-center" colspan="13"><h3 class="text-center text-danger">No Data found</h3></td>
        
    </tr>
    @endforelse

   
    
</table>
{{$plans->links()}}
</div>

{{--  Create new modal  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Packages</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="plan" method="post">
                    @csrf
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="plan_name">Packages Name: </label>
                            <div class="col-md-9">
                                <input id="plan_name" name="plan_name" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="actual_cost">Actual Cost: </label>
                            <div class="col-md-9">
                            <input type="number" name="actual_cost" id="actual_cost" class="form-control" required>
                                
                            </div>
                            </div>
                    
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="contact_no">Sale Cost: </label>
                        <div class="col-md-9">
                        <input type="number" name="sale_cost" id="sale_cost" class="form-control" required>
                            
                        </div>
                    </div>
                       <div class="form-group">
                        <label class="col-md-3 control-label" for="duration">Duration: </label>
                        <div class="col-md-9">
                        <input name="duration" id="duration" class="form-control" type="number">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="duration_unit">Duration Unit: </label>
                        <div class="col-md-9">
                        <input name="duration_unit" id="duration_unit" class="form-control" type="text">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="details">Details: </label>
                        <div class="col-md-9">
                        
                        <textarea name="details" id="details" cols="30" rows="10" class="form-control" required></textarea>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="playback_limit">Playback Limit: </label>
                        <div class="col-md-9">
                        <input name="playback_limit" id="playback_limit" class="form-control" type="number" required>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="status">Status: </label>
                        <div class="col-md-9">
                        <select name="status" id="status" class="form-control" required>
                                <option> -Select One- </option>
                                <option value="1">Active</option>
                                <option value="2">In Active</option>
                        </select>
                            
                        </div>
                    </div>
                     
                        

                    </fieldset>

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-success">Save changes</button>
                </form>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--  Create new modal  --}}

{{--  update modal  --}}
@foreach ($plans as $items)
    
<div class="modal fade" id="exampleModal{{$items->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Packages</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="plan/{{$items->id}}" method="post">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="plan_name">Packages Name: </label>
                                <div class="col-md-9">
                                    <input id="plan_name" name="plan_name" type="text" class="form-control" value="{{$items->plan_name}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="actual_cost">Actual Cost: </label>
                                <div class="col-md-9">
                                <input type="number" value="{{$items->actual_cost}}" name="actual_cost" id="actual_cost" class="form-control" required>
                                    
                                </div>
                                </div>
                        
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="contact_no">Sale Cost: </label>
                            <div class="col-md-9">
                            <input type="number" value="{{$items->sale_cost}}" name="sale_cost" id="sale_cost" class="form-control" required>
                                
                            </div>
                        </div>
                           <div class="form-group">
                            <label class="col-md-3 control-label" for="duration">Duration: </label>
                            <div class="col-md-9">
                            <input name="duration" value="{{$items->duration}}" id="duration" class="form-control" type="number">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="duration_unit">Duration Unit: </label>
                            <div class="col-md-9">
                            <input name="duration_unit" id="duration_unit" class="form-control" type="text" value="{{$items->duration_unit}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="details">Details:</label>
                            <div class="col-md-9">                            
                            <textarea name="details" id="details" cols="30" rows="10" class="form-control" >{{$items->details}}</textarea>                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="playback_limit">Playback Limit: </label>
                            <div class="col-md-9">
                            <input name="playback_limit" id="playback_limit" class="form-control" type="text" value="{{$items->playback_limit}}">   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Status: </label>
                            <div class="col-md-9">
                            <select name="status" id="status" class="form-control">
                                    <option> -Select One- </option>
                                    <option value="1" {{{($items->status==1)?"selected":""}}}>Active</option>
                                    <option value="0" {{{($items->status==0)?"selected":""}}}>In Active</option>
                            </select> 
                            </div>
                        </div>
                        </fieldset>
    
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save changes</button>
                </form>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
