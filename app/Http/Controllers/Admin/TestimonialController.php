<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Testimonial::latest()->get();
        return view('admin.testimonial.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Testimonial();
        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->message=$request->message;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/testimonial/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Testimonial::find($id);
        return view('admin.testimonial.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Testimonial::find($id);
        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->message=$request->message;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/testimonial/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Testimonial::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfull');
        return redirect()->back();
    }
}
