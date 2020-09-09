<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{manage_listener};
use App\{plan};
use App\{listeners_plans};
class manage_listenerController extends Controller
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
        $status = new colorController;
        $all_data = listeners_plans::with(['listener','plan'])->paginate(5);
        return view('admin_panel.manage_listener', compact('all_data', 'status'));
    }

    public function update(request $request, $id){
        $manage_listener = manage_listener::find($id);
        $manage_listener->status = $request->status;
        $manage_listener->save();
        session()->flash('message', 'Listener Update Successfully');
        return redirect('manage_listener');

    }
    public function store(request $request){
        $manage_listener = manage_listener::find($id);
        $manage_listener->status = $request->status;
        $manage_listener->save();
        session()->flash('message', 'Listener Update Successfully');
        return redirect('manage_listener');

    }
}

        