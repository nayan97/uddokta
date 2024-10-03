<?php

namespace App\Http\Controllers\admin;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personaldata=PersonalInfo::first();
        return view('admin.personal.index',compact('personaldata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infos = PersonalInfo::first();
        if($infos){
           $infos->name = $request->name;
           $infos->email = $request->email;
           $infos->phone = $request->phone;
           $infos->address = $request->address;
           $infos->stack = $request->stack;
           $infos->intro = $request->intro;
           $infos->heading = $request->heading;
           $infos->short_description = $request->short_description	;
           $infos->country = $request->country;
           $infos->language = $request->language;
            

            if($infos->update()){
                Toastr::success('Personal infows has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
           $infos=new PersonalInfo();
           $infos->name = $request->name;
           $infos->email = $request->email;
           $infos->phone = $request->phone;
           $infos->address = $request->address;
           $infos->stack = $request->stack;
           $infos->intro = $request->intro;
           $infos->heading = $request->heading;
           $infos->short_description = $request->short_description	;
           $infos->country = $request->country;
           $infos->language = $request->language;

            if($infos->save()){
                Toastr::success('Personal infows has been Updated successfully :-)','Success');
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
