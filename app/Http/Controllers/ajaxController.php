<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemList;
class ajaxController extends Controller
{
    public function get_all_items(request $request){
        $items = itemList::where('item_name', 'like', '%'.$request->item_name.'%')->select('item_name')->get();
        foreach($items as $i){
            $rr[] = $i->item_name;
        }

        return json_encode($rr);
    }
}
