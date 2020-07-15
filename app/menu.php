<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = [
        'menu_name', 'menu_url', 'status', 'modify_by','entry_by', 'icon'
    ];
}
