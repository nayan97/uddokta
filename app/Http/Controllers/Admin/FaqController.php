<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Faq::latest()->get();
        return view('admin.faq.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Faq();
        $data->question=$request->question;
        $data->faq_for=$request->faq_for;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data saved successfully');
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
        $data=Faq::find($id);
        return view('admin.faq.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Faq::find($id);
        $data->question=$request->question;
        $data->faq_for=$request->faq_for;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data saved successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Faq::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfull');
        return redirect()->back();
    }
}
