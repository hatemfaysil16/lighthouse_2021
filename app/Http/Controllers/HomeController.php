<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
class HomeController extends Controller
{

    public function HomeSlider()
    {
        $sliders = Slider::latest()->get();
       return view('admin.slider.index',compact('sliders')); 
    }

    public function AddSlider()
    {
        return view('admin.slider.create');
    }

    public function storeSlider(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required|unique:sliders',
            'description'=>'required|unique:sliders',
            'image'=>'required|mimes:jpg,jpeg,png',
        ],
        [
            'title.required'=>'Please Input Brand Name',
            'description.required'=>'Please Input Brand Name',
            'image.min'=>'Brand Longer then 4 characters',  
        ]);

        $brand_image = $request->file('image');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/slider/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);


        Slider::create([
            'title'=>['ar'=>$request->title_ar_ar, 'en' => $request->title],
            'description'=>['ar'=>$request->description_ar, 'en' => $request->description],
            'image'=>$last_img,
            'created_at'=>Carbon::now(),

        ]);

        return redirect()->route('home.slider')->with('success','Slider insert Successfull');

    }

    public function EditSlider($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    public function UpdateSlider(Request $request,$id)
    {

        $validate = $request->validate([
            'title'=>'required|unique:sliders',
            'description'=>'required|unique:sliders',
        ],
        [
            'title.required'=>'Please Input  title',
            'description.required'=>'Please Input description',
        ]);

        $brand_image = $request->file('image');
        $old_image = $request->old_image;

        if(!empty($brand_image)){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location,$img_name);
            unlink($old_image);
        }else{
            $last_img=$old_image;
        }


        Slider::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$last_img,
            'created_at'=>Carbon::now(),

        ]);

        return redirect()->route('home.slider')->with('success','Slider insert Successfull');

    }


    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $old_img = $slider->image;
        unlink($old_img);
        $slider->delete();
        return redirect()->route('home.slider')->with('success','Slider Delete Successfull');

    }
}
