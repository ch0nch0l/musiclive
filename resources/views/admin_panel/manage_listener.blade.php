@extends('admin_panel.main')
@section('body')
<div class="col-sm-12">
    <br>
    @include('admin_panel.layout.partials.errors') 
    @include('admin_panel.layout.partials.session')
</div>

<div class="col-sm-12">
<br>
<button type="button" class="btn btn-{{$status->set_color()}} btn-block" data-toggle="modal" data-target="#exampleModal">Add New Listeners</button>
</div>


<div class="col-sm-12 col-xs-12 automove"  >
<br>

    <table class="table table-responsive table-hover table-bordered">
    <tr>
        <th colspan="16" class="text-center"><h4>Listeners list</h4></th>
    </tr>
        <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Listener Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Package</th>
        <th class="text-center">Started At</th>
        <th class="text-center">Expires At</th>
        <th class="text-center">Listener Status</th>
        <th class="text-center">Action</th>
    </tr>
    
    @forelse ($all_data as $key=> $item)
      @php
          $p  = $key;
      @endphp
    <tr>
        <td class="text-center">{{++$p}}</td>
        <td class="text-center">{{$item['listener']['name']}}</td>
        <td class="text-center">{{$item['listener']['email']}}</td>
        <td class="text-center">{{$item['listener']['country_code'].$item['listener']['phone']}}</td>
        <td class="text-center">{{$item['plan']['plan_name']}}</td>
        <td class="text-center">{{$item->start_date}}</td>
        <td class="text-center">{{$item->expire_date}}</td>
        <td class="text-center">{{{($item['listener']['status']==1)?"Active":"In Active"}}}</td>
        
    <td class="text-center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->id}}" id="update_btn"><span class="fa fa-edit"></span></button></td>
    </tr>
    @empty
    <tr>
        <td class="text-center" colspan="13"><h3 class="text-center text-danger">No Data found</h3></td>
        
    </tr>
    @endforelse

   
    
</table>
{{$all_data->links()}}
</div>

{{--  Create new modal  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Listeners</h5>
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
                            <label class="col-md-3 control-label" for="plan_name">Listeners Name: </label>
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
@foreach ($all_data as $items)
    
<div class="modal fade" id="exampleModal{{$items->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Listeners</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="manage_listener/{{$items['listener']['id']}}" method="post">
                        @method('PUT')
                        @csrf
                        <fieldset>
                          
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Status: </label>
                            <div class="col-md-9">
                            <select name="status" id="status" class="form-control">
                                    <option> -Select One- </option>
                                    <option value="1" {{{($items['listener']['status']==1)?"selected":""}}}>Active</option>
                                    <option value="0" {{{($items['listener']['status']==0)?"selected":""}}}>In Active</option>
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
