<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\mapController;







use App\Models\Block;
use App\Models\Brand;
use App\Models\HomeAbout;
use App\Models\Multipic;
use App\Models\Service_two;
use App\Models\Social_media;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// use Mcamara\LaravelLocalization\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', function () {
            $SocialMedia = Social_media::all();
            $brands = Brand::latest()->get();

            $images = Multipic::all();
            $Blocks = Block::all();
            $about = HomeAbout::latest()->get();
            $service_two = Service_two::get();

                return view('home',compact('brands','about','images','Blocks','SocialMedia','service_two'));

        })->name('/');

//portfolio page Route
Route::get('/gallery',[AboutController::class,'Portfolio'])->name('portfolio');

//Home Contact Page Route
Route::get('/contact',[ContactController::class,'Content'])->name('contact');
Route::post('/contact/form',[ContactController::class,'ContentForm'])->name('contact.form');



//About
Route::get('/HomeAbout',[HomeAboutController::class,'index'])->name('HomeAbout');
//services
Route::get('/services',[ServicesController::class,'index'])->name('services');

//Pricing
Route::get('/Pricing',[PricingController::class,'index'])->name('Pricing');

//blog
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog_single',[BlogController::class,'indexBlog_single'])->name('blog_single');




// php artisan make:mail OrderShipped --markdown=emails.orders.shipped
// php artisan make:mail ContactUsMail -- markdown=Email.ContactUsMail





// Route::middleware(['auth'])->group(function () {




    Route::group(['middleware'=>['auth']], function(){





//for Brand Route
Route::get('/brand/all',[BrandController::class,'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class,'storeBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class,'Edit'])->name('edit.brand');
Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('update.brand');
Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('delete.brand');
Route::get('/user/logout',[BrandController::class,'Logout'])->name('user.logout');

//Multi Image Route
Route::get('/multi/image',[BrandController::class,'MultPic'])->name('multi.image');
Route::post('/multi/add',[BrandController::class,'storeImg'])->name('store.image');
Route::get('/multi/delete/{id}',[BrandController::class,'deleteMulti'])->name('delete.multi');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('admin.index');
})->name('dashboard');




// Admin All Route home
Route::get('/home/slider',[HomeController::class,'HomeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class,'storeSlider'])->name('store.slider');
Route::get('/edit/Slider/{id}',[HomeController::class,'EditSlider'])->name('edit.slider');
Route::post('/update/slider/{id}',[HomeController::class,'UpdateSlider'])->name('update.store');
Route::get('/delete/Slider/{id}',[HomeController::class,'deleteSlider'])->name('delete.slider');


// Home About All Route
Route::get('/home/About',[AboutController::class,'HomeAbout'])->name('home.about');
Route::get('/add/about',[AboutController::class,'AddAbout'])->name('add.about');
Route::post('/store/about',[AboutController::class,'storeAbout'])->name('store.about');
Route::get('/edit/about/{id}',[AboutController::class,'EditAbout'])->name('edit.about');
Route::post('/update/about/{id}',[AboutController::class,'updateAbout'])->name('store.about.update');
Route::get('/delete/about/{id}',[AboutController::class,'deleteAbout'])->name('delete.about');


//About2 Home
Route::get('/AllAbout',[HomeAboutController::class,'AllAbout'])->name('AllAbout');
Route::get('/createAbout',[HomeAboutController::class,'createAbout'])->name('createAbout');
Route::post('createAbout/store',[HomeAboutController::class,'storeAbout'])->name('createAbout.store');
Route::get('/About/edit/{id}',[HomeAboutController::class,'EditAbout'])->name('About.edit');
Route::post('/update/About/{id}',[HomeAboutController::class,'updateAbouts'])->name('AboutHome.update');
Route::get('/delete/About/{id}',[HomeAboutController::class,'deleteAbout'])->name('About.delete');




//Admin Contact page Route
Route::get('/admin/contact',[ContactController::class,'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact',[ContactController::class,'AdminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [ContactController::class, 'AdminStoreContact'])->name('store.contact');
Route::get('/delete/content/{id}',[ContactController::class,'deleteContent'])->name('delete.content');
Route::get('/admin/content/{id}',[ContactController::class,'EditContact'])->name('edit.content');
Route::post('/admin/content/update/{id}',[ContactController::class,'UpdateContent'])->name('update.content');

//social message
Route::get('/admin/message', [ContactController::class, 'AdminMessage'])->name('admin.message');
Route::get('/admin/message/delete/{id}',[ContactController::class,'deleteMessage'])->name('delete.message');


//social media
Route::get('/admin/SocialMedia',[ContactController::class,'HomeSocial'])->name('admin.SocialMedia');
Route::get('/admin/add/SocialMedia',[ContactController::class,'HomeSocialAdd'])->name('add.SocialMedia');
Route::post('/admin/store/SocialMedia',[ContactController::class,'SocialMediaStore'])->name('store.SocialMedia');
Route::get('/admin/SocialMedia/edit/{id}',[ContactController::class,'SocialMediaEdit'])->name('edit.SocialMedia');
Route::post('/admin/SocialMedia/update/{id}',[ContactController::class,'SocialMediaUpdate'])->name('update.SocialMedia');
Route::get('/admin/delete/SocialMedia/{id}',[ContactController::class,'SocialMediaDelete'])->name('delete.SocialMedia');






// change password and user profile Route
Route::get('/user/password',[ChangePass::class,'CPassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');


// User Profile
Route::get('/user/profile',[ChangePass::class,'PUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');

//use permation
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);


//Block Home
Route::get('block',[BlockController::class,'index'])->name('block');
Route::get('/add/block',[BlockController::class,'create'])->name('add.block');
Route::post('/add/store/block',[BlockController::class,'store'])->name('block.store');
Route::get('/edit/block/{id}',[BlockController::class,'edit'])->name('block.edit');
Route::post('/update/block/{id}',[BlockController::class,'update'])->name('block.update');
Route::get('/delete/block/{id}',[BlockController::class,'delete'])->name('block.delete');



//services
Route::get('/servicesAll',[ServicesController::class,'servicesAll'])->name('servicesAll');
Route::get('/services/create',[ServicesController::class,'servicesCreate'])->name('services.create');
Route::post('services/store',[ServicesController::class,'servicesStore'])->name('services.store');
Route::get('/services/edit/{id}',[ServicesController::class,'servicesEdit'])->name('services.edit');
Route::post('services/update/{id}',[ServicesController::class,'servicesUpdate'])->name('services.update');
Route::get('/services/delete/{id}',[ServicesController::class,'servicesDelete'])->name('services.delete');

//services_logo
Route::get('/servicesLogo',[ServicesController::class,'servicesLogoAll'])->name('servicesLogo');
Route::get('/servicesLogo/create',[ServicesController::class,'servicesLogoCreate'])->name('servicesLogo.create');
Route::post('servicesLogo/store',[ServicesController::class,'servicesLogoStore'])->name('servicesLogo.store');
Route::get('/servicesLogo/edit/{id}',[ServicesController::class,'services_logoEdit'])->name('servicesLogo.edit');
Route::post('servicesLogo/update/{id}',[ServicesController::class,'servicesLogoUpdate'])->name('servicesLogo.update');
Route::get('/servicesLogo/delete/{id}',[ServicesController::class,'servicesLogoDelete'])->name('servicesLogo.delete');

//service_two
Route::get('/service_two',[ServicesController::class,'service_twoAll'])->name('service_two');
Route::get('/service_two/create',[ServicesController::class,'service_twoCreate'])->name('service_two.create');
Route::post('service_two/store',[ServicesController::class,'service_twoStore'])->name('service_two.store');
Route::get('/service_two/edit/{id}',[ServicesController::class,'service_twoEdit'])->name('service_two.edit');
Route::post('service_two/update/{id}',[ServicesController::class,'service_twoUpdate'])->name('service_two.update');
Route::get('/service_two/delete/{id}',[ServicesController::class,'service_twoDelete'])->name('service_two.delete');

//feature
Route::get('/feature',[ServicesController::class,'featureAll'])->name('feature');
Route::get('/feature/create',[ServicesController::class,'featureCreate'])->name('feature.create');
Route::post('feature/store',[ServicesController::class,'featureStore'])->name('feature.store');
Route::get('/feature/edit/{id}',[ServicesController::class,'featureEdit'])->name('feature.edit');
Route::post('feature/update/{id}',[ServicesController::class,'featureUpdate'])->name('feature.update');
Route::get('/feature/delete/{id}',[ServicesController::class,'featureDelete'])->name('feature.delete');


//feature
Route::get('/team',[HomeAboutController::class,'teamAll'])->name('team');
Route::get('/team/create',[HomeAboutController::class,'teamCreate'])->name('team.create');
Route::post('team/store',[HomeAboutController::class,'teamStore'])->name('team.store');
Route::get('/team/edit/{id}',[HomeAboutController::class,'teamEdit'])->name('team.edit');
Route::post('team/update/{id}',[HomeAboutController::class,'teamUpdate'])->name('team.update');
Route::get('/team/delete/{id}',[HomeAboutController::class,'teamDelete'])->name('team.delete');


//Pricing
Route::get('/pricingAll',[PricingController::class,'pricingAll'])->name('pricingAll');
Route::get('/pricing/create',[PricingController::class,'pricingCreate'])->name('pricing.create');
Route::post('pricing/store',[PricingController::class,'pricingStore'])->name('pricing.store');
Route::get('/pricing/edit/{id}',[PricingController::class,'pricingEdit'])->name('pricing.edit');
Route::post('pricing/update/{id}',[PricingController::class,'pricingUpdate'])->name('pricing.update');
Route::get('/pricing/delete/{id}',[PricingController::class,'pricingDelete'])->name('pricing.delete');

//Pricing info
Route::get('/pricingBlog',[PricingController::class,'pricingBlogAll'])->name('pricingBlog');
Route::get('/pricingBlog/create',[PricingController::class,'pricingBlogCreate'])->name('pricingBlog.create');
Route::post('pricingBlog/store',[PricingController::class,'pricingBlogStore'])->name('pricingBlog.store');
Route::get('/pricingBlog/edit/{id}',[PricingController::class,'pricingBlogEdit'])->name('pricingBlog.edit');
Route::post('pricingBlog/update/{id}',[PricingController::class,'pricingBlogUpdate'])->name('pricingBlog.update');
Route::get('/pricingBlog/delete/{id}',[PricingController::class,'pricingBlogDelete'])->name('pricingBlog.delete');


//video
Route::get('video',[VideoController::class,'index'])->name('video');
Route::get('/add/video',[VideoController::class,'create'])->name('add.video');
Route::post('/add/store/video',[VideoController::class,'store'])->name('video.store');
Route::get('/edit/video/{id}',[VideoController::class,'edit'])->name('video.edit');
Route::post('/update/video/{id}',[VideoController::class,'update'])->name('video.update');
Route::get('/delete/video/{id}',[VideoController::class,'delete'])->name('video.delete');

//map
Route::get('map',[mapController::class,'index'])->name('map');
Route::get('/add/map',[mapController::class,'create'])->name('add.map');
Route::post('/add/store/map',[mapController::class,'store'])->name('map.store');
Route::get('/edit/map/{id}',[mapController::class,'edit'])->name('map.edit');
Route::post('/update/map/{id}',[mapController::class,'update'])->name('map.update');
Route::get('/delete/map/{id}',[mapController::class,'delete'])->name('map.delete');



//info
Route::get('info',[infoController::class,'index'])->name('info');
Route::get('/add/info',[infoController::class,'create'])->name('add.info');
Route::post('/add/store/info',[infoController::class,'store'])->name('info.store');
Route::get('/edit/info/{id}',[infoController::class,'edit'])->name('info.edit');
Route::post('/update/info/{id}',[infoController::class,'update'])->name('info.update');
Route::get('/delete/info/{id}',[infoController::class,'delete'])->name('info.delete');

        Route::get('/icon',function(){
            return view('admin.icon');
        });

});

});





