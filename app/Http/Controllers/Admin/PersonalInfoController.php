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
           $cimage = $request->file('cover_photo');
           if($cimage)
           {
               $image_name= uniqid();
               $ext = strtolower($cimage->getClientOriginalExtension());
               $image_full_name = $image_name. '.' .$ext;
               $upload_path = 'images/personalinfo/';
               $image_url = $upload_path.$image_full_name;
               $success = $cimage->move($upload_path, $image_full_name);
               if($success)
               {
                   $infos->cover_photo = $image_url;
               }

           }
           $pimage = $request->file('profile_photo');
           if($pimage)
           {
               $image_name= uniqid();
               $ext = strtolower($pimage->getClientOriginalExtension());
               $image_full_name = $image_name. '.' .$ext;
               $upload_path = 'images/personalinfo/';
               $image_url = $upload_path.$image_full_name;
               $success = $pimage->move($upload_path, $image_full_name);
               if($success)
               {
                $infos->profile_photo = $image_url;
               }

           }
           $infos->email = $request->email;
           $infos->phone = $request->phone;
           $infos->address = $request->address;
           $infos->stack = $request->stack;
           $infos->intro = $request->intro;
           $infos->heading = $request->heading;
           $infos->short_description = $request->short_description;
           $infos->support_req = $request->support_req;
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
           if($cimage)
           {
               $image_name= uniqid();
               $ext = strtolower($cimage->getClientOriginalExtension());
               $image_full_name = $image_name. '.' .$ext;
               $upload_path = 'images/personalinfo/';
               $image_url = $upload_path.$image_full_name;
               $success = $cimage->move($upload_path, $image_full_name);
               if($success)
               {
                   $infos->icon_light = $image_url;
               }

           }
           $pimage = $request->file('profile_photo');
           if($pimage)
           {
               $image_name= uniqid();
               $ext = strtolower($pimage->getClientOriginalExtension());
               $image_full_name = $image_name. '.' .$ext;
               $upload_path = 'images/personalinfo/';
               $image_url = $upload_path.$image_full_name;
               $success = $pimage->move($upload_path, $image_full_name);
               if($success)
               {
                $infos->profile_photo = $image_url;
               }

           }
           $infos->email = $request->email;
           $infos->phone = $request->phone;
           $infos->address = $request->address;
           $infos->stack = $request->stack;
           $infos->intro = $request->intro;
           $infos->heading = $request->heading;
           $infos->short_description = $request->short_description;
           $infos->support_req = $request->support_req;
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
