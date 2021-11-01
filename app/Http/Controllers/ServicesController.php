<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Service_logo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

//start services
    public function index()
    {
        $services = Service::get();
        $services_logo = Service_logo::get();
        return view('page.services',compact('services','services_logo'));
    }

    public function servicesAll()
    {
        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }

    public function servicesCreate()
    {
        return view('admin.services.create');
    }

    public function servicesStore(Request $request)
    {
        $validate = $request->validate([
            'list'=>'required',
            'title'=>'required',
            'short_dis'=>'required',
        ],
        [
            'list.required'=>'Please Input services list',
            'title.required'=>'Please Input services title',
            'short_dis.required'=>'Please Input services short_dis',
        ]);
        Service::create([
            'list' => $request->list,
            'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
            'short_dis'=>['ar'=>$request->short_dis_ar, 'en' => $request->short_dis],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('servicesAll')->with('success','services insert Successfull');
    }  

    public function servicesEdit($id)
    {
        $Service = Service::find($id);
        return view('admin.services.edit',compact('Service'));
    }

    public function servicesUpdate(Request $request,$id)
    {
        $validate = $request->validate([
            'list'=>'required',
            'title'=>'required',
            'short_dis'=>'required',
        ],
        [
            'list.required'=>'Please Input services list',
            'title.required'=>'Please Input services title',
            'short_dis.required'=>'Please Input services short_dis',
        ]);
        Service::find($id)->update([
            'list'=> $request->list,
            'title'=> $request->title,
            'short_dis'=>$request->short_dis,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('servicesAll')->with('success','services Edit Successfull');
    }


    public function servicesDelete($id)
    {
        $block = Service::find($id)->delete();
        return redirect()->route('servicesAll')->with('success','services delete Successfull');
    }
//end services


//start services_logo


    public function servicesLogoAll()
    {
        $services_logo = Service_logo::get();

        return view('admin.services_logo.index',compact('services_logo'));
    }

    public function servicesLogoCreate()
    {
        return view('admin.services_logo.create');
    }

    public function servicesLogoStore(Request $request)
    {
        $validate = $request->validate([
            'list'=>'required',
            'title'=>'required',
        ],
        [
            'list.required'=>'Please Input services list',
            'title.required'=>'Please Input services title',
        ]);
        Service_logo::create([
            'list'=> $request->list,
            'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('servicesLogo')->with('success','services_logo insert Successfull');
    }  

    public function services_logoEdit($id)
    {
        
        $Service_logo = Service_logo::find($id);

        return view('admin.services_logo.edit',compact('Service_logo'));
    }

    public function servicesLogoUpdate(Request $request,$id)
    {

        $validate = $request->validate([
            'list'=>'required',
            'title'=>'required',
        ],
        [
            'list.required'=>'Please Input services list',
            'title.required'=>'Please Input services title',
        ]);
        Service_logo::find($id)->update([
            'list'=> $request->list,
            'title'=> $request->title,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('servicesLogo')->with('success','services_logo Edit Successfull');
    }


    public function servicesLogoDelete($id)
    {
        
        $Service_logo = Service_logo::find($id)->delete();
        return redirect()->route('servicesLogo')->with('success','services_logo delete Successfull');
    }
//end services_logo
}


