@extends('admin_panel.main')
        @section('body')    
        <br>
        <div class="col-sm-12">
                <br>
                @include('admin_panel.layout.partials.errors') 
                @include('admin_panel.layout.partials.session')
            </div>
        <div class="col-sm-12">
                <a href="./add_music" class="btn btn-{{$random_color->set_color()}} btn-block">Add New Music</a>
        </div>
        <div class="col-sm-12">
                <br>
                <table class="table table-responsive table-striped">
                        <tr>
                                <th>Album Name</th>
                                <th>Artist Name</th>
                                <th>Genre</th>
                                <th>Category</th>
                                <th>Release Date</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                        </tr>
                        
                        @foreach ($music_list as $items)
                        <tr>
                                <td>{{$items->album_name}}</td>
                                <td>{{$items->artist_name}}</td>
                                <td>{{$items->genre}}</td>
                                <td>{{$items->category}}</td>
                                <td>{{$items->release_date}}</td>
                                <td>{{$items->location}}</td>
                                <td>{{{($items->status==1)?"Published":"Draft"}}}</td>
                                <td>{{$items->created_at}}</td>
                                <td>{{$items->updated_at}}</td>
                                <td><a href="./add_music/{{$items->album_name}}/edit/" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        @endforeach
                        
                </table>
        </div>
        @endsection