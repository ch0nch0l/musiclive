<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
class menuController extends Controller
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
        $menus = menu::all();
        return view('admin_panel.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menus = new menu;
        $this->validate(
            $request, [
                'menu_name'=>'required|unique:menus',
                'menu_url'=>'required|unique:menus',
                
                'status'=>'required',
            ]
            );
        menu::forceCreate($request->all());
        
        session()->flash('message', 'Menu Created Successfully');
        return redirect('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menus = menu::find($id);
        $this->validate(
            $request, [
                'menu_name'=>'required',
                'menu_url'=>'required',
                'status'=>'required'
            ]
            );
        $menus->update([
            'menu_name' => $request['menu_name'],
            'menu_url' => $request['menu_url'],
            'status' => $request['status'],
            'icon' => $request['icon'],
            'modify_by' => $request['modify_by']
        ]);
        
        session()->flash('message', 'Menu Update Successfully');
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
