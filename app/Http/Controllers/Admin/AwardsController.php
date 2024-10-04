<?php

namespace App\Http\Controllers\admin;

use App\Models\MyAwards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=MyAwards::latest()->get();
        return view('admin.award.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.award.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new MyAwards();
        $data->name=$request->name;
        $data->year=$request->year; 
        $data->status=$request->status;
    

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
        $data=MyAwards::find($id);
        return view('admin.award.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=MyAwards::find($id);

        $data->name=$request->name;
        $data->year=$request->year; 
        $data->status=$request->status;

        $data->save();
        Toastr::success('Data saved succesfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=MyAwards::find($id);
        $data->delete();
        Toastr::success('Data Deleted succesfully');
        return redirect()->back();
    }
}
