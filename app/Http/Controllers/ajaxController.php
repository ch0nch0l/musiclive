<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemList;
use App\music_list;
class ajaxController extends Controller
{
    public function get_all_items(request $request){
        $items = itemList::where('item_name', 'like', '%'.$request->item_name.'%')->select('item_name')->get();
        foreach($items as $i){
            $rr[] = $i->item_name;
        }

        return json_encode($rr);
    }

    public function page_function($id){
    if($id == "body"){
        $music_list['slider'] = music_list::orderBy('id', "desc")->groupBy('album_name')->limit(3)->get();
        $music_list['new_release'] = music_list::orderBy('id', "desc")->groupBy('album_name')->limit(8)->get();
    }
    if($id == "wishlist"){
        return "HI";
    }
        return view('website.layout.'.$id, compact('music_list', 'slider'));
    }

    public function main_page(){
        $music_list['slider'] = music_list::orderBy('id', "desc")->groupBy('album_name')->limit(3)->get();
        $music_list['new_release'] = music_list::orderBy('id', "desc")->groupBy('album_name')->limit(8)->get();
        return view('website.index', compact('music_list', 'slider'));
    }
}
