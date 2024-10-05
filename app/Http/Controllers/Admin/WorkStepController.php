<?php

namespace App\Http\Controllers\admin;

use App\Models\WorkStep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class WorkStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=WorkStep::latest()->get();
        return view('admin.workstep.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.workstep.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'logo' => 'required',
           


        ]);
        $step=new WorkStep();
        $step->title = $request->title;
        $step->short_description = $request->short_description;
        $step->status = $request->status;
        $logo = $request->file('logo');
        if($logo)
        {
            $image_name= uniqid();
            $ext = strtolower($logo->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/personalinfo/';
            $image_url = $upload_path.$image_full_name;
            $success = $logo->move($upload_path, $image_full_name);
            if($success)
            {
                $step->logo = $image_url;
            }

        }

        if($step->save()){
            Toastr::success('Personal infows has been Updated successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
