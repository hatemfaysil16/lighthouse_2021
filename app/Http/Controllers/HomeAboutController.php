<?php

namespace App\Http\Controllers;

use App\Models\About_title_description;
use App\Models\Brand;
use App\Models\HomeAbout;
use App\Models\Social_media;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
    public function index()
    {
        $SocialMedia = Social_media::get();

        $about = HomeAbout::latest()->get();   
        $brands = Brand::latest()->get();
        $teams = Team::get();


        $About_title_description  = About_title_description::get();

        
        return view('page.about',compact('About_title_description','about','brands','SocialMedia','teams'));
    }


    public function AllAbout()
    {
        $AllAbout = About_title_description::all();
        return view('admin.HomeAbout.index',compact('AllAbout'));
    }


    public function createAbout()
    {
        return view('admin.HomeAbout.create');
    }

    public function storeAbout(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required|mimes:jpg,jpeg,png',
        ],
        [
            'title.required'=>'Please Input About title',
            'description.required'=>'Please Input About description',
            'img.min'=>'Brand Longer then 4 characters',  
        ]);

        $brand_image = $request->file('img');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/team/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);

        About_title_description::create([
            'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
            'description'=>['ar'=>$request->description_ar, 'en' => $request->description],
            'img'=>$last_img,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('AllAbout')->with('success','about insert Successfull');
    }


    public function EditAbout($id)
    {
        $editAbout = About_title_description::find($id);
        return view('admin.HomeAbout.edit',compact('editAbout'));
    }

    public function updateAbouts(Request $request,$id)
    {
        $validate = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'mimes:jpg,jpeg,png',

        ],
        [
            'title.required'=>'Please Input About title',
            'description.required'=>'Please Input About description',
            'img.min'=>'Brand Longer then 4 characters',  

        ]);

        $brand_image = $request->file('img');
        if($brand_image){

        $old_image = $request->old_image;

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/team/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);
        unlink($old_image);

        About_title_description::find($id)->update([
            'title'=> $request->title,
            'description'=>$request->description,
            'img'=>$last_img,
            'created_at'=>Carbon::now(),
        ]);
    }else{
        About_title_description::find($id)->update([
            'title'=> $request->title,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);
    }

        return redirect()->route('AllAbout')->with('success','about update Successfull');
    }

    public function deleteAbout($id)
    {
        $delete = About_title_description::find($id);
        if($delete){
            $old_image = $delete->img;
            unlink($old_image);
            $delete->delete();    
        }

        return redirect()->route('AllAbout')->with('success','about delete Successfull');
    }




// start team


    public function teamAll()
    {
        $team = Team::get();

        return view('admin.team.index',compact('team'));
    }

    public function teamCreate()
    {
        return view('admin.team.create');
    }

    public function teamStore(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required',
            'desc'=>'required',
        ],
        [
            'title.required'=>'Please Input services title',
            'desc.required'=>'Please Input services desc',
        ]);
        Team::create([
            'title'=> ['ar'=>$request->title_ar, 'en' => $request->title],
            'desc'=>['ar'=>$request->desc_ar, 'en' => $request->desc],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('team')->with('success','team insert Successfull');
    }  

    public function teamEdit($id)
    {
        
        $team = Team::find($id);

        return view('admin.team.edit',compact('team'));
    }

    public function teamUpdate(Request $request,$id)
    {

        $validate = $request->validate([
            'title'=>'required',
            'desc'=>'required',
        ],
        [
            'title.required'=>'Please Input services title',
            'desc.required'=>'Please Input services desc',
        ]);
        Team::find($id)->update([
            'title'=> $request->title,
            'desc'=> $request->desc,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('team')->with('success','team Edit Successfull');
    }


    public function teamDelete($id)
    {
        
        $team = Team::find($id)->delete();
        return redirect()->route('team')->with('success','team delete Successfull');
    }

// end team


}
