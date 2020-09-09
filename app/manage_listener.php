<?php

        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        use App\listeners_plans;
        use App\plan;
        
        class manage_listener extends Model
        {
           protected $table = "listeners";
         
         //   public function plan(){
         //      return $this->belongsToMany('App\plan', 'listeners_plans', 'listener_id', 'plan_id');
         //   }

        }
        