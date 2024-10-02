<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Team::latest()->get();
        return view('admin.team.index',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Team();
        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->linkedin=$request->linkedin;
        $data->instragram=$request->instragram;
        $data->status=$request->status;

        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/team/';
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Team::find($id);
        return view('admin.team.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Team::find($id);
        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->linkedin=$request->linkedin;
        $data->instragram=$request->instragram;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/team/';
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
       $data=Team::find($id);
       $data->delete();
       Toastr::success('Data Deleted Successfull');
       return redirect()->back();
    }
}
