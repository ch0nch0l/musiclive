@extends('admin_panel.main')
@section('body')
<div class="col-sm-12">
    <br>
    @include('admin_panel.layout.partials.errors') 
    @include('admin_panel.layout.partials.session')
</div>


<div class="col-sm-12">
<br>
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Add New Company</button>
</div>


<div class="col-sm-12 col-xs-12 automove"  >
<br>

    <table class="table table-responsive table-hover table-bordered">
    <tr>
        <th colspan="16" class="text-center"><h4>Company list</h4></th>
    </tr>
        <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Company Name</th>
        <th class="text-center">Address</th>
        <th class="text-center">Contact No</th>
        <th class="text-center">Email</th>
        <th class="text-center">Website</th>
        <th class="text-center">Status</th>
        <th class="text-center">Action</th>
    </tr>
    
    @forelse ($company_info as $key=> $item)
        
    <tr>
        <td class="text-center">{{$item->company_id}}</td>
        <td class="text-center">{{$item->company_name}}</td>
        <td class="text-center">{{$item->address}}</td>
        <td class="text-center">{{$item->contact_no}}</td>
        <td class="text-center">{{$item->email}}</td>
        <td class="text-center">{{$item->website}}</td>
        <td class="text-center">{{{($item->status==1)?"Active":"In active"}}}</td>
    <td class="text-center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->company_id}}" id="update_btn"><span class="fa fa-edit"></span></button></td>
    </tr>
    @empty
    <tr>
        <td class="text-center" colspan="8"><h3 class="text-center text-danger">No Data found</h3></td>
        
    </tr>
    @endforelse

   
    
</table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/mainSettings" method="post">
                    @csrf
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="company_name">company Name</label>
                            <div class="col-md-9">
                                <input id="company_name" name="company_name" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="address">Address</label>
                            <div class="col-md-9">
                            <input type="text" name="address" id="address" class="form-control" required>
                                
                            </div>
                            </div>
                    
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="contact_no">Contact No</label>
                        <div class="col-md-9">
                        <input type="text" name="contact_no" id="contact_no" class="form-control" required>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Email</label>
                        <div class="col-md-9">
                        <input name="email" id="email" class="form-control" required type="email" >
                            
                        </div>
                    </div>
<!-- Email input-->
                       <div class="form-group">
                        <label class="col-md-3 control-label" for="website">Website</label>
                        <div class="col-md-9">
                        <input name="website" id="website" class="form-control" type="text">
                            
                        </div>
                    </div>
<!-- Email input-->
                      
                     
                        <!-- Message body -->

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
{{--  update modal  --}}
@foreach ($company_info as $items)
    
<div class="modal fade" id="exampleModal{{$items->company_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="mainSettings/{{$items->company_id}}" method="post">
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">company Name</label>
                            <div class="col-md-9">
                                <input id="company_name" name="company_name" type="text" class="form-control" required value="{{$items->company_name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Item Description</label>
                            <div class="col-md-9">
                            <input type="text" name="address" id="address" class="form-control" value="{{$items->address}}">
                                
                            </div>
                    </div>
              
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="contact_no">Contact No</label>
                        <div class="col-md-9">
                        <input type="text" name="contact_no" id="contact_no" class="form-control" value="{{$items->contact_no}}">
                            
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Email</label>
                        <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control" required value="{{$items->email}}">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="website">Website</label>
                        <div class="col-md-9">
                        <input type="text" name="website" id="website" class="form-control" required value="{{$items->website}}">
                            
                        </div>
                    </div>

                        
                        <!-- Email input-->
                      
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Status</label>
                            <div class="col-md-9">
                                <select name="status" id="status" class="col-sm-3 form-control" required>
                                   
                                    <option value="1" {{{($items->status==1)?"selected":""}}}>Active</option>
                                    <option value="0" {{{($items->status==0)?"selected":""}}}>In Active</option>

                                </select>
                            </div>
                        </div>
                     
                        <!-- Message body -->

                    </fieldset>

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-success">Update</button>
                </form>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection
