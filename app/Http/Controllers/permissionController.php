<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu_permission;
class permissionController extends Controller
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
    $permission = menu_permission::all();
     return view('admin_panel.menu_permission', compact('permission'));
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
       if($request->sub_menu_id!=''){
        for($i=0;$i<count($request->sub_menu_id);$i++){

            $mp = new menu_permission;
            $mp->sub_menu_id =  $request->sub_menu_id[$i];
             $mp->main_menu_id = $request->main_menu_id;
             $mp->user_id = $request->user_id;
             $mp->save();
           }
           session()->flash('message', 'Created Successfully');
       return redirect('menu_permission');
    
       }else{
        session()->flash('message', 'No Sub Menu Slected');
        return redirect('menu_permission');
     
       }
       
            
        
       
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
        
        $update_permission = menu_permission::find($id);
        // $this->validate(
        //     $request, [
        //         'main_menu_id'=>'required|unique:menu_permission',
        //         'sub_menu_id'=>'required|unique:menu_permission',
        //     ]
        //     );

        $update_permission->user_id = $request->user_id;
        $update_permission->main_menu_id = $request->main_menu_id;
        $update_permission->sub_menu_id = $request->sub_menu_id;
        $update_permission->remember_token = $request->_token;
        $update_permission->save();
        session()->flash('message', 'Updated Successfully');
        return redirect('menu_permission');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_permission = menu_permission::find($id);
        $delete_permission->delete();
        session()->flash('message', 'Deleted Successfully');
        return  redirect('menu_permission');
    }
}
