@extends('admin_panel.main')
        @section('extra_css')
        <style>
                #thumbnil_image {
                        border: 1px solid black;
                        padding: 2%;
                        background-color: lightgray;
                }     
        </style>
        
        @endsection
        @section('body')    
        <div class="col-sm-12">
                <br>
                @include('admin_panel.layout.partials.errors') 
                @include('admin_panel.layout.partials.session')
            </div>
        <br>
        <form action="./add_music" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-6">
                <fieldset>
                        <legend>Upload Tracks Here</legend>
                </fieldset>
                
             
                <input required type="text" class="form-control" name="album_name" id="album_name" placeholder="Beats Name">
                <br>
             
                <input required type="text" class="form-control" name="artist_name" id="artist_name" placeholder="Artist name">
                <br>
             
                <input required type="text" class="form-control" name="genre" id="genre" placeholder="Genre">
                <br>
             
                <input required type="text" class="form-control" name="category" id="category" placeholder="Category">
                <br>
                <label for="release_date" class="form-control">Release Date: </label>
                <input required type="date" class="form-control" name="release_date" id="release_date" placeholder="Release Date">
                <br>
                <input required type="text" class="form-control" name="location" id="location" placeholder="Location">
                <br>
                <select name="status" id="status" class="form-control" required>
                        <option value="">-Select Status-</option>
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                </select>
                <br>
                <label for="mp3_tracks" class="form-control">Mp3 Tracks</label>

                <input required type="file" name="mp3_tracks[]" id="mp3_tracks" class="form-control" >
                <br>
                <label for="album_art" class="form-control">Album Art</label>
                <input required type="file" name="album_art" id="album_art" class="form-control" onchange="readURL(this, '#thumbnil_image')">
                <br>
                <label for="album_banner" class="form-control">Album Banner</label>
                <input type="file" name="album_banner" id="album_banner" class="form-control" onchange="readURL(this, '#banner_image')">
                
        </div>
        <div class="col-sm-6">
                <fieldset>
                        <legend>Mp3 Files</legend>
                        <span id="all_mp3">
                        </span>
                        
                </fieldset>
                <fieldset>
                        <legend>Image Preview</legend>
                        <img id="thumbnil_image" class="img-responsive" src="{{asset('img/example.png')}}" alt="">
                        <br>
        </fieldset>
        <fieldset>
                <legend>Banner Preview</legend>
                <img id="banner_image" class="img-responsive" src="{{asset('img/example_banner.png')}}" alt="">
                <br>
</fieldset>     
        </div>
        <div class="col-sm-12">
                <br>
                <input class="btn btn-success btn-block" type="submit" name="submit_tracks" id="submit_tracks" value="Submit" >
        
                <input class="btn btn-danger btn-block" type="submit" name="cancel_tracks" id="cancel_tracks" value="Cancel">
        </div>
        </form>
        @endsection
        @section('extra_js')
            <script>
                function readURL(input, element) {
                        $(element).attr('src', "");

                        if (input.files && input.files[0]) {
                
                            var reader = new FileReader();
                
                            
                
                            reader.onload = function (e) {
                
                                $(element).attr('src', e.target.result).css("width", "100%");
                
                            }
                
                            reader.readAsDataURL(input.files[0]);
                
                        }
                
                    }
                    function handleFiles(event) {
                        var text = "";
                        var files = event.target.files;
                        console.log(files);
                        $.each(files, function(key, val){
                        if(val.type!="audio/mpeg"){
                        alert("Invalid File Format");
                                return false;
                        }
                        text+="<input required type='text' name='mp3_name[]' id='mp3_name_"+key+"' value='"+val.name+"' class='form-control'><audio class='form-control' id='audio_"+key+"' controls><source src='"+URL.createObjectURL(files[key])+"' id='src_"+key+"' /></audio><br>";
                        $("#audio_"+key).load();
                        })
                        $("#all_mp3").html(text);
                        
                        
                }
                document.getElementById("mp3_tracks").addEventListener("change", handleFiles, false);
            </script>
        @endsection