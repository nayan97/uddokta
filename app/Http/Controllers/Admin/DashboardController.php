<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard.index');
    }

     //   our subscriber

    public function subcriber(){
        $subscribe = Subscribe::latest()->get();
        return view('admin.subscriber.index', compact('subscribe'));
    }

    public function destroy(string $id){
        $data=Subscribe::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfull');
        return redirect()->back();
    }
}
