
    @extends('admin_panel.main') @section('body')
    <br>

    <div class="col-sm-12">
        @include('admin_panel.layout.partials.errors') @include('admin_panel.layout.partials.session')
        <div class="com-sm-6 col-xm-12">
            <button class="btn btn-success btn-block" data-target="#addnew" data-toggle="modal"> Add New</button>
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <td class="text-center">User Name</td>
                <td class="text-center">Menu</td>
                <td class="text-center">Sub Menu</td>
                <td class="text-center" colspan="2">Action</td>
            </tr>
            @foreach ($permission as $item)

            <tr>
                <td class="text-center">{{DB::table('users')->where('id', $item->user_id)->value('name')}}</td>
                <td class="text-center">{{DB::table('menus')->where('id', $item->main_menu_id)->value('menu_name')}}</td>
                <td class="text-center">{{DB::table('sub_menus')->where('id', $item->sub_menu_id)->value('sub_menu_name')}}</td>
                <td class="text-center">
                    <button class="btn btn-warning" type="submit" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                        <span class="fa fa-edit">
                    </button>
                    </span>
                </td>
                <td class="text-center">
                    <form action="menu_permission/{{$item->id}}" method="POST" onclick="confirm('Are You Sure You Want To Delete This ?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            <span class="fa fa-trash">
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    
    {{-- add menu permission --}}
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Assign Menu to Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="menu_permission" method="post">
                        @csrf
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="user_id">Users</label>
                                <div class="col-md-9">
                                    <select name="user_id" id="user_id" class="form-control">

                                        @php $n = DB::table('users')->get(); @endphp @foreach ($n as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="user_id">Menus</label>
                                <div class="col-md-9">
                                    <select name="main_menu_id" id="main_menu_id" class="form-control" onchange="getdata()">

                                        @php $n = DB::table('menus')->get(); @endphp @foreach ($n as $s)
                                        <option value="{{$s->id}}">{{$s->menu_name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="entry_by" id="entry_by" value="{{ Auth::user()->id }} ">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sub_menus">Sub Menus</label>
                                <div class="col-md-9">

                                    <span id="here">
                                        <select name="sub_menu_id" id="sub_menu_id" class="form-control"></select>
                                    </span>

                                </div>
                            </div>


                            <!-- Message body -->

                        </fieldset>

                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- add menu permission --}} {{-- update modal --}} @foreach ($permission as $update)

    <div class="modal fade" id="exampleModal{{$update->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update @php $route_name = explode('.',Route::currentRouteName()); @endphp {{ucfirst(str_replace('_',
                        ' ', $route_name[0]))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="menu_permission/{{$update->id}}" method="post">
                        @csrf @method('PUT')
                        <fieldset>
                            <!-- User input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">User</label>
                                <div class="col-md-9">
                                    <select name="user_id" id="user_id" class="form-control">
                                        @php $users = DB::table('users')->get(); @endphp @foreach ($users as $user)
                                        <option value="{{$user->id}}" {{($user->id==$update->user_id)?"selected":""}} >{{$user->name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            {{-- main menu settings --}}
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Main Menu</label>
                                <div class="col-md-9">
                                    <select name="main_menu_id" id="main_menu_id{{$update->id}}" class="form-control" onchange="sub_menu_change({{$update->id}})">
                                        @php $main_menu = DB::table('menus')->get(); @endphp @foreach ($main_menu as $menus)
                                        <option value="{{$menus->id}}" {{($menus->id==$update->main_menu_id)?"selected":""}} >{{$menus->menu_name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            {{-- Sub menu settings --}}
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Sub Menu</label>
                                <div class="col-md-9">
                                    <span id="there{{$update->id}}">
                                        <select name="sub_menu_id" id="sub_menu_id" class="form-control">
                                            @php $sub_menu = DB::table('sub_menus')->where('main_menu_id', $update->main_menu_id)->get(); @endphp @foreach ($sub_menu
                                            as $sub_menus)
                                            <option value="{{$sub_menus->id}}" {{($sub_menus->id==$update->sub_menu_id)?"selected":""}} >{{$sub_menus->sub_menu_name}}</option>
                                            @endforeach

                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="status">Font Awesome Icons</label>
                                <div class="col-md-9">
                                    <input type="text" name="icon" id="icon" class="form-control" value="{{$update->icon}}">
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
    @endforeach {{-- Update menu permission --}}
    <script>
        function getdata() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("here").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "menu_id/" + document.getElementById('main_menu_id').value, true);
            xhttp.send();
        }
        function sub_menu_change(id) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("there" + id).innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "update_id/" + document.getElementById('main_menu_id' + id).value, true);
            xhttp.send();
        }

        window.onload = getdata();
    </script> @endsection