<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
      
public function index()
{
    return view('page.blog');
}

public function indexBlog_single()
{
    return view('page.blog-single');
}



public function pricingAll()
{
    $pricing = Pricing::all();
    return view('admin.pricing.index',compact('pricing'));
}

public function pricingCreate()
{
    return view('admin.pricing.create');
}

public function pricingStore(Request $request)
{
    $validate = $request->validate([
        'title'=>'required',
        'description'=>'required',
    ],
    [
        'title.required'=>'Please Input pricing title',
        'description.required'=>'Please Input pricing description',
    ]);
    Pricing::create([
        'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
        'description'=>['ar'=>$request->description_ar, 'en' => $request->description],
        'created_at'=>Carbon::now(),
    ]);
    return redirect()->route('pricingAll')->with('success','pricing insert Successfull');
}  

public function pricingEdit($id)
{
    $pricing = Pricing::find($id);
    return view('admin.pricing.edit',compact('pricing'));
}

public function pricingUpdate(Request $request,$id)
{
    $validate = $request->validate([
        'title'=>'required',
        'description'=>'required',
    ],
    [
        'title.required'=>'Please Input pricing title',
        'description.required'=>'Please Input pricing description',
    ]);
    Pricing::find($id)->update([
        'title'=> $request->title,
        'description'=>$request->description,
        'created_at'=>Carbon::now(),
    ]);
    return redirect()->route('pricingAll')->with('success','pricing Edit Successfull');
}


public function pricingDelete($id)
{
    Pricing::find($id)->delete();
    return redirect()->route('pricingAll')->with('success','pricing delete Successfull');
}
}
