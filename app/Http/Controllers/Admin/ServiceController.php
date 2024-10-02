<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Service::latest()->get();
        return view('admin.service.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Service();
        $data->name=$request->name;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->name));
        $data->description=$request->description;
        $data->status=$request->status;
        $simage = $request->file('icon');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/service/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->icon = $image_url;
            }

        }

        $stimage = $request->file('image');
        if($stimage)
        {
            $image_name= uniqid();
            $ext = strtolower($stimage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/service/';
            $image_url = $upload_path.$image_full_name;
            $success = $stimage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data saved succesfully');
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
        $data=Service::find($id);
        return view('admin.service.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Service::find($id);
        $data->name=$request->name;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->name));
        $data->description=$request->description;
        $data->status=$request->status;
        $simage = $request->file('icon');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/service/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->icon = $image_url;
            }

        }

        $stimage = $request->file('image');
        if($stimage)
        {
            $image_name= uniqid();
            $ext = strtolower($stimage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/service/';
            $image_url = $upload_path.$image_full_name;
            $success = $stimage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data Updated succesfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Service::find($id);
        $data->delete();
        Toastr::success('Data Deleted succesfully');
        return redirect()->back();
    }
}
