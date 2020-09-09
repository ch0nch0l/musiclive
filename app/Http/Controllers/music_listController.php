<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{music_list};
class music_listController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $random_color = new colorController;
        $music_list = music_list::groupBy('album_name')->get();
        return view('admin_panel.music_list', compact('music_list', 'random_color'));
    }
}

        