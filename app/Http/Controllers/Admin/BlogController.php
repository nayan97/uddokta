<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datas=Blog::latest()->get();
       return view('admin.blog.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog_categories=BlogCategory::where('status',1)->get();
        return view('admin.blog.create',compact('blog_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Blog();
        $data->title=$request->title;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->title));
        $data->blog_category_id=$request->blog_category_id;
        $data->description=$request->description;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/blog/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data Update succesfully');
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
        $data=Blog::find($id);
        $blog_categories=BlogCategory::where('status',1)->get();
        return view('admin.blog.edit',compact('data','blog_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Blog::find($id);
        $data->title=$request->title;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->title));
        $data->blog_category_id=$request->blog_category_id;
        $data->description=$request->description;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/blog/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }


        }
        $data->save();
        Toastr::success('Data Update succesfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Blog::find($id);
        $data->delete();
        Toastr::success('Data Deleted Succssfull');
        return redirect()->back();
    }
}
