<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sub_menu;
class subMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_menus = sub_menu::all();
        return view('admin_panel.sub_menu', compact('sub_menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "HI";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub_menus = new sub_menu;
        $this->validate(
            $request, [
                'sub_menu_name'=>'required|unique:sub_menus',
                'sub_menu_url'=>'required|unique:sub_menus',
            ]
            );
        $sub_menus->sub_menu_name = $request->sub_menu_name;

        $sub_menus->sub_menu_url = $request->sub_menu_url;

        $sub_menus->main_menu_id = $request->main_menu_id;
        $sub_menus->status =$request->status;

        $sub_menus->icon =$request->icon;
        $sub_menus->entry_by = $request->entry_by;

        $sub_menus->modify_by = $request->modify_by;
        $sub_menus->save();
        
        $myfile = fopen("../resources/views/admin_panel/".$request->sub_menu_url.".blade.php", "w") or die("Unable to open file!");
        $txt = "@extends('admin_panel.main')
        @section('body')    
        <br>
        
        @endsection";
        fwrite($myfile, $txt);
        $myfile1 = fopen("../app/Http/Controllers/".$request->sub_menu_url."Controller.php", "w") or die("Unable to open file!");
        
        $txt1 = "<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{{$request->sub_menu_url}};
class ".$request->sub_menu_url."Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_panel.".$request->sub_menu_url."');
    }
}

        ";
        fwrite($myfile1, $txt1); 
        $myfile2 = fopen("../app/".$request->sub_menu_url.".php", "w") or die("Unable to open file!");
        
        $txt2 = "<?php

        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        
        class ".$request->sub_menu_url." extends Model
        {
           //
        }
        ";
        fwrite($myfile2, $txt2); 
        return redirect('sub_menu');
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
        return "hi";
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
        $sub_menus = sub_menu::find($id);
        $this->validate(
            $request, [
                'sub_menu_name'=>'required',
                'sub_menu_url'=>'required',
            ]
            );
        $sub_menus->sub_menu_name = $request->sub_menu_name;

        $sub_menus->sub_menu_url = $request->sub_menu_url;
        
        $sub_menus->icon =$request->icon;
        $sub_menus->main_menu_id = $request->main_menu_id;
        $sub_menus->status =$request->status;
        $sub_menus->modify_by = $request->modify_by;
        $sub_menus->save();
        return redirect('sub_menu');
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
