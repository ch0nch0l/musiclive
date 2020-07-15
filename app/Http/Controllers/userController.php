<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
class userController extends Controller
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
        $all_user = User::all();
        return view('admin_panel.user', compact('all_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "HI";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        $this->validate(
            $request, [
                'email'=>'required|unique:users',
                
                'name'=>'required',
            ]
            );

        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'entry_by'=>$request['entry_by'],
            'mobile'=>$request['mobile'],
            'role_id'=>$request['role_id'],
            'country'=>$request['country']
        ]);
        
        session()->flash('message', 'User Created Successfully');
        return redirect('user');

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
        $users =User::find($id);
        $this->validate(
            $request, [
                'email'=>'required',
                'name'=>'required',
                'new_password'=>'required',
                'confirm_password'=>'required'
            ]
            );

        
        $users->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'entry_by'=>$request['entry_by'],
            'mobile'=>$request['mobile'],
            'role_id'=>$request['role_id'],
            'password' => Hash::make($request['new_password']),
            'country'=>$request['country']
        ]);
        session()->flash('message', 'Updated Successfully');
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        session()->flash('message', 'Deleted Successfully');
        return  redirect('user');
    }
}
