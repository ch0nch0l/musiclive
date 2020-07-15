@extends('admin_panel.main')
        @section('body')    
        <div class="col-sm-12">
                <br>
                @include('admin_panel.layout.partials.errors') 
                @include('admin_panel.layout.partials.session')
            </div>
            
        <br>
        <div class="col-sm-12">
        <button type="button" name="add_warehouse" id="add_warehouse" class="btn btn-primary btn-block" data-target="#warehouse_modal" data-toggle="modal">Add Warehouse Name</button>
        <form action="{{ url('warehouse') }}" method="POST">
                @csrf
                @method('POST')
        <div class="modal" tabindex="-1" role="dialog" id="warehouse_modal">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Warehouse</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                          
                      <div class="container-fluid">
                              <div class="row">
                                <label for="warehouse">Warehouse names:</label>
                                <input type="text" class="form-control" id="warehouse_name" name="warehouse_name" placeholder="Write Warehouse Name Here">
                                <br>
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status">
                                        <option value="">-Select One-</option>
                                        <option value="1">Active</option>
                                        <option value="0">In Active</option>
                                </select>
                              </div>
                      </div>
                
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save Warehouse Name</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </form>

        <table class="table table-responsive table-striped">
                <thead>
                        <tr>
                                <th>SL</th>
                                <th>Warehouse Name</th>
                                <th>Status</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        @foreach ($warehouses as $key=> $pts)
                        <tr>
                                <td>{{++$key}}</td>
                                <td>{{$pts->warehouse_name}}</td>
                                <td>{{{($pts->status == 1)?"Active":"In Active"}}}</td>
                                <td> <button type="button" data-target="#edit_warehouse_{{$key}}" data-toggle="modal" class="btn btn-danger">Edit</button> </td>
                        </tr>    

                        <form action="warehouse/{{$pts->id}}" method="POST">
                                @csrf
                                @method('PUT')
                        <div class="modal" tabindex="-1" role="dialog" id="edit_warehouse_{{$key}}">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                          
                                      <div class="container-fluid">
                                              <div class="row">
                                                <label for="warehouse">Warehouse names:</label>
                                                <input type="text" class="form-control" id="warehouse_name" name="warehouse_name" placeholder="Write Warehouse Name Here" value="{{$pts->warehouse_name}}">
                                                <br>
                                                <label for="status">Status:</label>
                                                <select class="form-control" id="status" name="status">
                                                        <option value="">-Select One-</option>
                                                        <option value="1" {{{($pts->status == 1)?"selected":""}}}>Active</option>
                                                        <option value="0" {{{($pts->status == 0)?"selected":""}}}>In Active</option>
                                                </select>
                                              </div>
                                      </div>
                                
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Edit Warehouse Name</button>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </form>
                        @endforeach
                        
                </tbody>
        </table>
        </div>

        @endsection