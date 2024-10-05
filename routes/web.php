<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\PersonalInfoController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Affiliate\DashboardController as AffiliateDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['middleware'=> ['login']], function(){
    Route::get('admin/login',[LoginController::class,'login'])->name('admin.login');
    Route::post('login',[LoginController::class,'login_submit']);
    // Route::get('login','HomeController@login')->name('login');
});
Route::get('logout',function(){
    Auth::logout();
    return redirect()->route('home');
});
Route::get('unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized');

Route::group(['middleware'=> ['auth', 'admin'], 'as'=>'admin.','prefix'=>'admin'], function(){
    Route::get('dashboard',[AdminDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('subcriber',[AdminDashboardController::class,'subcriber'])->name('subcriber');
    Route::delete('subcriber/{id}',[AdminDashboardController::class,'destroy'])->name('subcriber.destroy');
    Route::get('appointment',[AdminDashboardController::class,'appointment'])->name('appointment');
    Route::delete('appointment/{id}',[AdminDashboardController::class,'appointmentDestroy'])->name('appointment.destroy');
    
    Route::resource('personalinfo','App\Http\Controllers\Admin\PersonalInfoController');
    Route::resource('skills','App\Http\Controllers\Admin\SkillsController');
    Route::resource('awards','App\Http\Controllers\Admin\AwardsController');
    Route::resource('workstep','App\Http\Controllers\Admin\WorkStepController');
    Route::resource('sitesetting','App\Http\Controllers\Admin\SiteSettingController');
    Route::resource('blog_category','App\Http\Controllers\Admin\BlogCategoryController');
    Route::resource('blog','App\Http\Controllers\Admin\BlogController');
    Route::resource('service','App\Http\Controllers\Admin\ServiceController');
    Route::resource('team','App\Http\Controllers\Admin\TeamController');
    Route::resource('client','App\Http\Controllers\Admin\ClientController');
    Route::resource('testimonial','App\Http\Controllers\Admin\TestimonialController');
    Route::resource('project_category','App\Http\Controllers\Admin\ProjectCategoryController');
    Route::resource('project','App\Http\Controllers\Admin\ProjectController');
    Route::resource('faq','App\Http\Controllers\Admin\FaqController');
    Route::resource('user_message','App\Http\Controllers\Admin\UserMessageController');
    Route::get('newsletter/send','App\Http\Controllers\Admin\UserMessageController@newsletterSend')->name('newsletter.send');
    Route::post('newsletter/submit','App\Http\Controllers\Admin\UserMessageController@newsletterSubmit')->name('newsletter.submit');


});

Route::group(['middleware'=> ['auth', 'customer'], 'as'=>'customer.','prefix'=>'customer'], function(){
    Route::get('dashboard',[CustomerDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('logout',[CustomerDashboardController::class,'logout'])->name('logout');




});

Route::group(['middleware'=> ['auth', 'affiliate'], 'as'=>'affiliate.','prefix'=>'affiliate'], function(){
    Route::get('dashboard',[AffiliateDashboardController::class,'dashboard'])->name('dashboard');



});

Route::group(['middleware'=> ['auth', 'seller'], 'as'=>'seller.','prefix'=>'seller'], function(){
    Route::get('dashboard',[SellerDashboardController::class,'dashboard'])->name('dashboard');

});



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about','App\Http\Controllers\Frontend\HomeController@about')->name('about');
Route::get('/service','App\Http\Controllers\Frontend\HomeController@service')->name('service');
Route::get('/service-detail/{slug}','App\Http\Controllers\Frontend\HomeController@serviceDetails')->name('service.details');
Route::get('/portfolio','App\Http\Controllers\Frontend\HomeController@projects')->name('portfolio');
Route::get('/project-details/{slug}','App\Http\Controllers\Frontend\HomeController@projectDetails')->name('project.details');
Route::get('/team','App\Http\Controllers\Frontend\HomeController@team')->name('team');
Route::get('/contact','App\Http\Controllers\Frontend\HomeController@contact')->name('contact');
Route::get('/faq','App\Http\Controllers\Frontend\HomeController@faq')->name('faq');
Route::get('/blog','App\Http\Controllers\Frontend\HomeController@blog')->name('blog');
Route::get('/appointment','App\Http\Controllers\Frontend\HomeController@appointment')->name('appointment');
Route::get('/testimonial','App\Http\Controllers\Frontend\HomeController@testimonial')->name('testimonial');

Route::get('/blog-detail/{slug}','App\Http\Controllers\Frontend\HomeController@blogDetails')->name('blog.detail');
Route::get('/blog-category/{slug}','App\Http\Controllers\Frontend\HomeController@blogByCategory')->name('blog.by.category');
Route::post('/message/submit','App\Http\Controllers\Frontend\HomeController@messageSubmit')->name('message.submit');
Route::post('/subcribe/submit','App\Http\Controllers\Frontend\HomeController@subscribeSubmit')->name('subscribe.submit');
Route::post('/appointment/submit','App\Http\Controllers\Frontend\HomeController@appointmentSubmit')->name('appointment.submit');




