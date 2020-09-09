<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\manage_listener;
use App\plan;
class listeners_plans extends Model
{
    protected $tbale = "listeners_plans";

    public function listener(){
        return $this->hasOne(manage_listener::class, 'id', 'listener_id');
    }
    public function plan(){
        return $this->hasOne(plan::class, 'id', 'plan_id');
    }
}
