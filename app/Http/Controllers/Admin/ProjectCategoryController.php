<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=ProjectCategory::latest()->get();
        return view('admin.project_category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new ProjectCategory();
        $data->name=$request->name;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->name));
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data saved successfull');
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
        $data=ProjectCategory::find($id);
        return view('admin.project_category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=ProjectCategory::find($id);
        $data->name=$request->name;
        $data->slug=preg_replace('/\s+/u', '-', trim($data->name));
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data saved successfull');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=ProjectCategory::find($id);
        $data->delete();
        Toastr::success('Data Deleted successfull');
        return redirect()->back();
    }
}
