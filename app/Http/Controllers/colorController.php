<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->random_number = rand(0,4);
        $this->color_status = Null;
    }

    public function set_color(){
        if($this->random_number==0){
            $this->color_status = "success";
        }if($this->random_number==1){
            $this->color_status = "danger";
        }
        if($this->random_number==2){
            $this->color_status = "warning";
        }
        if($this->random_number==3){
            $this->color_status = "primary";
        }
        if($this->random_number==4){
            $this->color_status = "info";
        }
        return $this->color_status;
    }
}
