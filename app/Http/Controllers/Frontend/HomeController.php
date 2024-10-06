<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Faq;
use App\Models\Blog;
use App\Models\Plan;
use App\Models\Team;
use App\Models\Client;
use App\Models\Message;
use App\Models\MySkill;
use App\Models\Project;
use App\Models\Service;
use App\Models\MyAwards;
use App\Models\WorkStep;
use App\Models\Subscribe;
use App\Models\Appoinment;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\BlogCategory;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    public function home()
    {
        $setting=SiteSetting::first();
        $infos=PersonalInfo ::first();
        $plans = Plan::take(3)->get();
        $steps = WorkStep::first();
        $services=Service::where('status',1)->get();
        $projects=Project::where('status',1)->get();
        $clients=Client::where('status',1)->get();
        $testimonials=Testimonial::where('status',1)->latest()->take(3)->get();
        $skills=MySkill::where('status',1)->latest()->take(3)->get();
        $awards=MyAwards::where('status',1)->latest()->take(6)->get();
        $teams=Team::where('status',1)->get();
        $blogs=Blog::where('status',1)->latest()->get()->take(3);
        return view('welcome',compact('setting','services','projects','clients','testimonials','teams','blogs','infos','skills','awards', 'steps', 'plans'));


    }
    public function about()
    {
        $setting=SiteSetting::first();
        $teams=Team::where('status',1)->get();
        $clients=Client::where('status',1)->get();
        
        $testimonials=Testimonial::where('status',1)->latest()->get();
        $blogs=Blog::where('status',1)->latest()->get()->take(3);
        return view('about',compact('setting','teams','clients','testimonials','blogs'));

    }
    public function service()
    {
        $setting=SiteSetting::first();
        $plans = Plan::take(3)->get();
        $services=Service::where('status',1)->get();
        $testimonials=Testimonial::where('status',1)->latest()->get();
        $steps = WorkStep::first();
        return view('service',compact('setting','services','testimonials','steps','plans'));

    }
    public function serviceDetails($slug)
    {
        $setting=SiteSetting::first();
        $service=Service::where('slug',$slug)->first();
        return view('service_details',compact('setting','service'));
    }
    public function projects()
    {
        $setting=SiteSetting::first();
        $project_categories=ProjectCategory::where('status',1)->get();
        $projects=Project::where('status',1)->get();
        return view('projects',compact('setting','project_categories','projects'));

    }
    public function projectDetails($slug)
    {
        $setting=SiteSetting::first();
        $project=Project::where('slug',$slug)->first();
        return view('project_details',compact('setting','project'));
    }
    public function team()
    {
        $setting=SiteSetting::first();
        $teams=Team::where('status',1)->get();

        return view('team',compact('setting','teams'));
    }
    public function contact()
    {
        $setting=SiteSetting::first();
        return view('contact',compact('setting'));
        // return view('contact');
    }
    public function faq()
    {
        $progress=Faq::where('status',1)->where('faq_for','Progress')->get();
        $payment=Faq::where('status',1)->where('faq_for','Payment')->get();
        $support=Faq::where('status',1)->where('faq_for','Support')->get();
        $setting=SiteSetting::first();
        return view('faq',compact('progress','payment','support','setting'));
    }
    public function blog()
    {
        $blogs=Blog::where('status',1)->latest()->paginate(8);
        $latest_blogs=Blog::where('status',1)->latest()->get()->take(3);
        $blog_categories=BlogCategory::where('status',1)->get();
        $setting=SiteSetting::first();
        return view('blog',compact('blogs','blog_categories','latest_blogs','setting'));

    }
    public function blogDetails($slug)
    {
        $latest_blogs=Blog::where('status',1)->latest()->get()->take(3);
        $blog_categories=BlogCategory::where('status',1)->get();
        $setting=SiteSetting::first();
        $blog=Blog::where('slug',$slug)->first();
        $blog->view_count=$blog->view_count+1;
        $blog->save();
        return view('blog_details',compact('blog','latest_blogs','blog_categories','setting'));
    }
    public function blogByCategory($slug)
    {
        $blog_category=BlogCategory::where('slug',$slug)->first();
        $blogs=Blog::where('status',1)->where('blog_category_id',$blog_category->id)->latest()->paginate(8);
        $latest_blogs=Blog::where('status',1)->where('blog_category_id',$blog_category->id)->latest()->get()->take(3);
        $blog_categories=BlogCategory::where('status',1)->get();
        $setting=SiteSetting::first();
        return view('blog_by_category',compact('blogs','blog_categories','latest_blogs','blog_category','setting'));


    }

    public function messageSubmit(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10',
            'message' => 'required',


        ]);
        $data=new Message();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->company=$request->company;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->save();
        Toastr::success('Your Response has been saved!');
        return redirect()->back();
    }
    public function subscribeSubmit(Request $request)
    {
        $data=new Subscribe();

        $data->email=$request->email;
        $data->save();
        Toastr::success('Thanks for Subscribing');
        return redirect()->back();
    }

    public function appointment()
    {
        $setting=SiteSetting::first();
        return view('appointment',compact('setting'));


    }
    public function testimonial()
    {
        $setting=SiteSetting::first();
        return view('testimonial',compact('setting'));

    }

    public function appointmentSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required',
            'budget' => 'required',
            'marketing_status' => 'required',
            'facebook' => 'required',
            'message_one' => 'required',
            'message_two' => 'required',

        ]);

        $data=new Appoinment();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->marketing_status=$request->marketing_status;
        $data->budget=$request->budget;
        $data->facebook=$request->facebook;
        $data->website=$request->website;
        $data->message_one=$request->message_one;
        $data->message_two=$request->message_two;
        $data->save();
        Toastr::success('Your Response has been saved!');
        return redirect()->back();
    }

    
}
