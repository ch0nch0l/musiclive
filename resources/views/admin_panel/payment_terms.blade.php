@extends('admin_panel.main')
        @section('body')    
        <div class="col-sm-12">
                <br>
                @include('admin_panel.layout.partials.errors') 
                @include('admin_panel.layout.partials.session')
            </div>
            
        <br>
        <div class="col-sm-12">
        <button type="button" name="add_peyment_terms" id="add_peyment_terms" class="btn btn-primary btn-block" data-target="#payment_terms_modal" data-toggle="modal">Add Payment Terms</button>
        <form action="{{ url('payment_terms') }}" method="POST">
                @csrf
                @method('POST')
        <div class="modal" tabindex="-1" role="dialog" id="payment_terms_modal">
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
                                <label for="payment_terms">Payment Terms:</label>
                                <input type="text" class="form-control" id="payment_terms" name="payment_terms" placeholder="Write Payment Terms Here">
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
                      <button type="submit" class="btn btn-primary">Save Payment terms</button>
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
                                <th>Payment Terms</th>
                                <th>Status</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        @foreach ($pt as $key=> $pts)
                        <tr>
                                <td>{{++$key}}</td>
                                <td>{{$pts->payment_terms}}</td>
                                <td>{{{($pts->status == 1)?"Active":"In Active"}}}</td>
                                <td> <button type="button" data-target="#edit_payment_terms_{{$key}}" data-toggle="modal" class="btn btn-danger">Edit</button> </td>
                        </tr>    

                        <form action="payment_terms/{{$pts->id}}" method="POST">
                                @csrf
                                @method('PUT')
                        <div class="modal" tabindex="-1" role="dialog" id="edit_payment_terms_{{$key}}">
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
                                                <label for="payment_terms">Payment Terms:</label>
                                                <input type="text" class="form-control" id="payment_terms" name="payment_terms" placeholder="Write Payment Terms Here" value="{{$pts->payment_terms}}">
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
                                      <button type="submit" class="btn btn-primary">Edit Payment terms</button>
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