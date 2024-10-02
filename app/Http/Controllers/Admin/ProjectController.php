<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Project::latest()->get();
        return view('admin.project.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project_categories=ProjectCategory::where('status',1)->get();
        return view('admin.project.create',compact('project_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Project();
        $data->project_category_id=$request->project_category_id;
        $data->name=$request->name;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->name));
        $data->project_overview=$request->project_overview;
        $data->client=$request->client;
        $data->company=$request->company;
        $data->location=$request->location;
        $data->project_type=$request->project_type;
        $data->duration=$request->duration;
        $data->status=$request->status;
        $simage = $request->file('image_one');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/project/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image_one = $image_url;
            }

        }
        $image_two = $request->file('image_two');
        if($image_two)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/project/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_two->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image_two = $image_url;
            }

        }
        $image_three = $request->file('image_three');
        if($image_three)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/project/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_three->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image_three = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data Saved Successfull');
        return redirect()->back();
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
        $project_categories=ProjectCategory::where('status',1)->get();
        $data=Project::find($id);
        return view('admin.project.edit',compact('project_categories','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Project::find($id);
        $data->project_category_id=$request->project_category_id;
        $data->name=$request->name;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->name));
        $data->project_overview=$request->project_overview;
        $data->client=$request->client;
        $data->company=$request->company;
        $data->location=$request->location;
        $data->project_type=$request->project_type;
        $data->duration=$request->duration;
        $data->status=$request->status;
        $simage = $request->file('image_one');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/project/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image_one = $image_url;
            }

        }
        $image_two = $request->file('image_two');
        if($image_two)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/project/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_two->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image_two = $image_url;
            }

        }
        $image_three = $request->file('image_three');
        if($image_three)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/project/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_three->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image_three = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data Saved Successfull');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Project::find($id);
        $data->delete();
        Toastr::success(('Data Deleted Successfull'));
        return redirect()->back();
    }
}
