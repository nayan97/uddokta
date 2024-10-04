<?php

namespace App\Http\Controllers\admin;

use App\Models\MySkill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=MySkill::latest()->get();
        return view('admin.skills.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new MySkill();
        $data->name=$request->name;
        $data->expertise=$request->expertise; 
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
        $data=MySkill::find($id);
        return view('admin.skills.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=MySkill::find($id);

        $data->name=$request->name;
        $data->expertise=$request->expertise; 
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
        $data=MySkill::find($id);
        $data->delete();
        Toastr::success('Data Deleted succesfully');
        return redirect()->back();
    }
}
