<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{mainSettings};
use Auth;
class mainSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_info = mainSettings::all();
        return view('admin_panel.mainSettings', compact('company_info'));
    }
    public function store(request $request){
        $cstmr = new mainSettings;
        $cstmr->company_name= $request->company_name;
        $cstmr->address= $request->address;
        $cstmr->contact_no = $request->contact_no;
        $cstmr->email = $request->email;
        $cstmr->website = $request->website;
        $cstmr->created_by = Auth::user()->id;
        $cstmr->save();
        session()->flash('message', 'Company Created Successfully');
        return redirect('mainSettings');
    }
}

        