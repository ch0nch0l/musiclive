<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{plan};
class planController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = new colorController;
        
        $plans = plan::paginate(5);
        return view('admin_panel.plan', compact('plans', 'status'));
    }

    public function store(request $request){
        $plan  = new plan;
        $plan->plan_name = $request->plan_name;
        $plan->actual_cost = $request->actual_cost;
        $plan->sale_cost = $request->sale_cost;
        $plan->duration = $request->duration;
        $plan->duration_unit = $request->duration_unit;
        $plan->details = $request->details;
        $plan->playback_limit = $request->playback_limit;
        $plan->status = $request->status;
        $plan->save();
        session()->flash('message', 'Customer Created Successfully');
        return redirect('plan');
    }
    public function update(request $request, $id){
        $plan  = plan::find($id);
        $plan->plan_name = $request->plan_name;
        $plan->actual_cost = $request->actual_cost;
        $plan->sale_cost = $request->sale_cost;
        $plan->duration = $request->duration;
        $plan->duration_unit = $request->duration_unit;
        $plan->details = $request->details;
        $plan->playback_limit = $request->playback_limit;
        $plan->status = $request->status;
        $plan->save();
        session()->flash('message', 'Customer Updated Successfully');
        return redirect('plan');
    }
}

        