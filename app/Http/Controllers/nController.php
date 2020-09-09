<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\sub_menu;
use DB;
class nController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public static function dropdown($id){
  $sub_menus = DB::table('sub_menus')->where('main_menu_id', $id)->get();
   
  echo '<select name="sub_menu_id[]" id="sub_menu_id[]" class="form-control" multiple>';
  foreach($sub_menus as $sub_menu){                           
    echo '<option value="'.$sub_menu->id.'">'.$sub_menu->sub_menu_name.'</option>';                          
   
  }
    echo '</select>';
   
     
    }

    public static function update($id){
      $sub_menus = DB::table('sub_menus')->where('main_menu_id', $id)->get();
      
     echo '<select name="sub_menu_id" id="sub_menu_id" class="form-control" >';
     foreach($sub_menus as $sub_menu){                           
       echo '<option value="'.$sub_menu->id.'">'.$sub_menu->sub_menu_name.'</option>';                          
      
     }
       echo '</select>';
      
        
       }
}
