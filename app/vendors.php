<?php

        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        
        class vendors extends Model
        {
         protected $table = "vendor_info";
         protected $primaryKey = "vendor_id";

         protected $fillable = ["vendor_name","address","contact_no","email","website"];
        }
        