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
        $datas=WorkStep::first();
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

        $step = WorkStep::first();
        if($step){

        $step->description_one = $request->short_description_one;
        $step->description_two = $request->short_description_two;
        $step->description_three = $request->short_description_three;
               
        $logo_one = $request->file('logo_one');
        if($logo_one)
        {
            $image_name= uniqid();
            $ext = strtolower($logo_one->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/personalinfo/';
            $image_url = $upload_path.$image_full_name;
            $success = $logo_one->move($upload_path, $image_full_name);
            if($success)
            {
                $step->logo_one = $image_url;
            }

        }
       
        $logo_two = $request->file('logo_two');
        if($logo_two)
        {
            $image_name= uniqid();
            $ext = strtolower($logo_two->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/personalinfo/';
            $image_url = $upload_path.$image_full_name;
            $success = $logo_two->move($upload_path, $image_full_name);
            if($success)
            {
                $step->logo_two = $image_url;
            }

        }
        $logo_three = $request->file('logo_three');
        if($logo_three)
        {
            $image_name= uniqid();
            $ext = strtolower($logo_three->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/personalinfo/';
            $image_url = $upload_path.$image_full_name;
            $success = $logo_three->move($upload_path, $image_full_name);
            if($success)
            {
                $step->logo_three = $image_url;
            }

         }
     
            

            if($step->update()){
                Toastr::success('Working step has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        
    }
        else{
            $step=new WorkStep();
            $step->description_one = $request->short_description_one;
            $step->description_two = $request->short_description_two;
            $step->description_three = $request->short_description_three;
                   
            $logo_one = $request->file('logo_one');
            if($logo_one)
            {
                $image_name= uniqid();
                $ext = strtolower($logo_one->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/personalinfo/';
                $image_url = $upload_path.$image_full_name;
                $success = $logo_one->move($upload_path, $image_full_name);
                if($success)
                {
                    $step->logo_one = $image_url;
                }
    
            }
           
            $logo_two = $request->file('logo_two');
            if($logo_two)
            {
                $image_name= uniqid();
                $ext = strtolower($logo_two->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/personalinfo/';
                $image_url = $upload_path.$image_full_name;
                $success = $logo_two->move($upload_path, $image_full_name);
                if($success)
                {
                    $step->logo_two = $image_url;
                }
    
            }
            $logo_three = $request->file('logo_three');
            if($logo_three)
            {
                $image_name= uniqid();
                $ext = strtolower($logo_three->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/personalinfo/';
                $image_url = $upload_path.$image_full_name;
                $success = $logo_three->move($upload_path, $image_full_name);
                if($success)
                {
                    $step->logo_three = $image_url;
                }
    
            }

            
            if($step->save()){
                Toastr::success('Working step has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
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
