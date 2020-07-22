<?php

        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        
        class add_music extends Model
        {
           protected $fillable = ["track_name",
           "album_name",
           "artist_name",
           "genre",
           "category",
           "release_date",
           "location",
           "status",
           "created_at",
           "updated_at"];

           protected $table = "musics";
        }
        