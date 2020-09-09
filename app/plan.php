<?php

        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        use App\manage_listener;
        class plan extends Model
        {
           //

           public function listeners(){
            return $this->belongsToMany('App\manage_listener', 'listeners_plans', 'listener_id', 'plan_id');
           }
        }
        