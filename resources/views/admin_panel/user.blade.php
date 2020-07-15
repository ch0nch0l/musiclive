@extends('admin_panel.main') 
@section('body')
<br>
<div class="col-sm-12">
    <div class="col-sm-6 alert bg-danger"> Welcome to the admin dashboard panel </div>
    <div class="col-sm-6">
        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-success pull-right">Add New</a>
    </div>

    @include('admin_panel.layout.partials.errors') 
    @include('admin_panel.layout.partials.session')



    <table class="table table-hovered table-bordered text-center table-responsive">
        <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Country</th>
            <th class="text-center">Mobile</th>
            <th class="text-center">Created At</th>
            <th class="text-center">Status</th>
            <th class="text-center" colspan="2">Action</th>
            @forelse ($all_user as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->country}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{{(isset($item->status) && $item->status==1?"Active":"In Active")}}}</td>
                <td>{{$item->created_at->diffForHumans()}}</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#new{{$item->id}}" class="btn btn-edit btn-warning">
                        <span class="fa fa-edit"></span>
                    </a>
                </td>
                </td>
            </tr>
            @empty {{"No Records Found"}} @endforelse

        </tr>
    </table>
</div>
<!--Modal Starts Here
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="create_user" method="POST">
                    @csrf
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                <input type="hidden" name="entry_by" id="entry_by" value="{{ Auth::user()->id }} ">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="Designation">Designation</label>
                            <div class="col-md-9">
                                <select name="role_id" id="role_id" class="form-control">

                                    @php $counrty = \DB::table('roles')->orderBy('role', 'asc')->get(); @endphp @foreach ($counrty as $cn)
                                    <option value='{{$cn->role}}'>{{$cn->role}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="country">Country</label>
                            <div class="col-md-9">
                                <select name="country" id="country" class="form-control">

                                    @php $counrty = \DB::table('countries')->orderBy('name', 'asc')->get(); 
                                    @endphp
                                     @foreach ($counrty as $cns)
                                    <option value='{{$cns->name}}'>{{$cns->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="mobile">Mobile</label>
                            <div class="col-md-9">
                                <input type="text" name="mobile" id="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password2" id="password2" class="form-control">
                            </div>
                        </div>
                        <div class="pass_result"></div>
                        <!-- Form actions -->

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

@foreach ($all_user as $update)
<div class="modal fade" id="new{{$update->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action='user_update/{{$update->id}}' method="post">
                    @csrf
                     @method('PUT')
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" value="{{$update->name}}" class="form-control">
                                <input type="hidden" name="entry_by" id="entry_by" value="{{ Auth::user()->id }} ">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" placeholder="Your email" value="{{$update->email}}" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="Designation">Designation</label>
                            <div class="col-md-9">
                                <select name="role_id" id="role_id" class="form-control">

                                    @php 
                                    $roles = $update->role_id; 
                                    $role = \DB::table('roles')->pluck('role'); 
                                    @endphp 
                                    @foreach ($role as $key=>$value)
                                    <option value='{{$value}}' {{ ( $roles==$value ) ? 'selected' : '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="country">Country</label>
                            <div class="col-md-9">
                                <select name="country" id="country" class="form-control">

                                    @php $counrty = \DB::table('countries')->orderBy('name', 'asc')->get(); 
                                    @endphp @foreach ($counrty as $cns)
                                    <option value='{{$cns->name}}' {{($update->country == $cns->name)?'selected':''}}>{{$cns->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="mobile">Mobile</label>
                            <div class="col-md-9">
                                <input type="text" name="mobile" id="mobile" value="{{$update->mobile}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="mobile">Status</label>
                            <div class="col-md-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="">-Select Status-</option>
                                    <option value="1" {{{(isset($update->status) && $update->status==1)?"selected":""}}}>Active</option>
                                    <option value="0" {{{(isset($update->status) && $update->status==0)?"selected":""}}}>In Active</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <p class="text-center">Change Password</p>
                            <hr>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password">New Password</label>
                            <div class="col-md-9">
                                <input type="password" name="new_password" id="new_password" value="" class="form-control">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="confirm_password">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" name="confirm_password" id="confirm_password" value="" class="form-control">
                            </div>
                        </div>

                        <!-- Form actions -->

                    </fieldset>

            </div>
            <div class="modal-footer">

                <button type="submit" id="update_submit" class="btn btn-primary">Update</button>
                </form>
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
 @endsection
 @section('extra_js')
 <script>
 $(document).ready( function(){
       $('#password2').keyup( function(){
           if($('#password2').val()!=$('#password').val()){
               $(".pass_result").html("<p class='text-center text-danger'>Password Did not Match</p>");
           }else{
            $(".pass_result").html("<p class='text-center text-success'>Password  Matched</p>");
           }
       });
       $('#confirm_password').keyup( function(){
        if($('#new_password').val()!=$('#confirm_password').val()){
            $("#warnning_message").remove();
            $("#update_submit").prop("disabled", true);
            $("#confirm_password").after("<p id='warnning_message' class='text-center text-danger'>Password Did not Match</p>");
        }else{
            $("#warnning_message").remove();
            $("#update_submit").prop("disabled", false);
            $("#confirm_password").after("<p id='warnning_message' class='text-center text-success'>Password  Matched</p>");
        }
    });
    });
</script>
 
 @endsection  