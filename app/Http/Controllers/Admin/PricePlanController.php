<?php

namespace App\Http\Controllers\admin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans=Plan::latest()->get();
        return view('admin.plan.index',compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.plan.create');
    }
        //

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data=Plan::find($id);
        return view('admin.plan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plan=Plan::find($id);

        $this->validate($request, [
            'name' => 'required',
            'sub_title' => 'required',
            'price' => 'required|numeric|min:0|max:99999999.99',
            'image' => 'required',  
            'pack_title' => 'required',
            'analytics_campaigns' => 'required',
            'keywords' => 'required',
            'social_media_reviews' => 'required',
            'free_optimizations' => 'required',
            'support_247' => 'required|boolean',
            'offer_tag' => 'nullable',
        ]);

       
        $plan->name = $request->name;
        $plan->sub_title = $request->sub_title;
        $plan->price = $request->price;
        $plan->pack_title = $request->pack_title;
        $plan->analytics_campaigns = $request->analytics_campaigns;
        $plan->keywords = $request->keywords;
        $plan->social_media_reviews = $request->social_media_reviews;
        $plan->free_optimizations = $request->free_optimizations;
        $plan->support_247 = $request->support_247;
        $plan->offer_tag = $request->offer_tag;

        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/priceplan/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $plan->image = $image_url;
            }

        }

        $plan->save();
        Toastr::success('Data saved succesfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
