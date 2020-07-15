<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{add_music};
class add_musicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_panel.add_music');
    }

}

        