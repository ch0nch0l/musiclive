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
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index()
    {
        $rr = new colorController;
        return view('admin_panel.add_music', compact('rr'));
    }

    public function store(request $request){

    if(isset($request->submit_tracks)){


        $tt = $request->mp3_tracks;
        
        foreach($tt as $key => $data){
            $music = new add_music;
            $music->album_name = $request->album_name;
            $music->artist_name =$request->artist_name;
            $music->genre = $request->genre;
            $music->category = $request->category;
            $music->release_date = $request->release_date;
            $music->location = $request->location;
            $music->status = $request->status;
            $music->track_name = $request->mp3_name[$key];
            $music->save();
            $request->mp3_tracks[$key]->storeAs('public/mp3', $music->id.".mp3");
            $request->album_art->storeAs('public/album_art', $music->id.".".$request->file('album_art')->extension());
            if($request->album_banner!="" && $key == 0){
                $request->album_banner->storeAs('public/album_banner', $music->id.".".$request->file('album_banner')->extension());
            }
        }
        session()->flash('message', 'Music Uploaded Successfully');
        return redirect('add_music');
    }
    if(isset($request->cancel_tracks)){
        $_POST = array();
        return redirect('add_music');
    }
    }
    public function edit($album_name){
    $rr = new colorController;
    $add_music = add_music::where('album_name', $album_name)->get();

    return view('admin_panel.edit_music', compact('add_music', 'rr'));

    }

    public function update(request $request, $id){
        
        if(isset($request->submit_tracks)){
            $add_music = add_music::where('album_name', $id)->get();    
            if( $request->mp3_tracks!= "" && (count($request->mp3_tracks)!=count($add_music))){
            return redirect('add_music/'.$add_music[0]->album_name.'/edit')->withErrors("Your uploaded files didn't match");
            }else{
                foreach($add_music as $key => $data){
                   
                    $music = add_music::find($data->id);
                    $music->album_name = $request->album_name;
                    $music->artist_name =$request->artist_name;
                    $music->genre = $request->genre;
                    $music->category = $request->category;
                    $music->release_date = $request->release_date;
                    $music->location = $request->location;
                    $music->status = $request->status;
                    $music->track_name = $request->mp3_name[$key];
                    $music->save();
                    if($request->mp3_tracks!=""){
                        $request->mp3_tracks[$key]->storeAs('public/mp3', $music->id.".mp3");
                        
                    }
                    if($request->album_art!=""){
                        
                        $request->album_art->storeAs('public/album_art', $music->id.".".$request->file('album_art')->extension());
                    }
                    if($request->album_banner!=""){
                        $request->album_banner->storeAs('public/album_banner', $music->id.".".$request->file('album_banner')->extension());
                    }
                $album_name = $music->album_name; 
                }
                session()->flash('message', 'Music Updated Successfully');
                return redirect('add_music/'.$album_name.'/edit');
            }
           
        }
        

        if(isset($request->cancel_tracks)){
            $rr = new colorController;
            return view('admin_panel.music_list', compact('rr'));
        }
        
        
    }

}

        