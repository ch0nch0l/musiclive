<?php

        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        
        class mainSettings extends Model
        {
         protected $table = "company_info";
         protected $primaryKey = "company_id";

         protected $fillable = ["company_name","address","contact_no","email","website"];
        }
        