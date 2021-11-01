<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AllBrand()
    {
        $brands = Brand::latest()->paginate(5);
        return view('admin.brand.index',compact('brands'));
    }

    public function storeBrand(Request $request)
    {
        $validate = $request->validate([
            'brand_name'=>'required|unique:brands',
            'brand_image'=>'required|mimes:jpg,jpeg,png',
        ],
        [
            'brand_name.required'=>'Please Input Brand Name',
            'brand_image.min'=>'Brand Longer then 4 characters',  
        ]);


        $brand_image = $request->file('brand_image');


        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);

        Brand::insert([
            'brand_name'=>$request->brand_name,
            'brand_image'=>$last_img,
            'created_at'=>Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification);

    }

    public function Edit($id)
    {
        $brand = Brand::find($id);

        return view('admin.brand.edit',compact('brand'));
    }


    public function update(Request $request,$id)
    {

        $old_image = $request->old_image;

        $validate = $request->validate([
            'brand_name'=>'required|min:4',
            'brand_image'=>'mimes:jpg,jpeg,png',
        ],
        [
            'brand_name.required'=>'Please Input Brand Name',
            'brand_image.min'=>'Brand Longer then 4 characters',  
        ]);

        $brand_image = $request->file('brand_image');
        if($brand_image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location,$img_name);
    
            unlink($old_image);
            Brand::find($id)->update([
                'brand_name'=>$request->brand_name,
                'brand_image'=>$last_img,
                'created_at'=>Carbon::now(),
    
            ]);

            $notification = array(
                'message' => 'Brand Update Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('all.brand')->with($notification);
            
        }else{
            Brand::find($id)->update([
                'brand_name'=>$request->brand_name,
                'created_at'=>Carbon::now(),
    
            ]);
    
            $notification = array(
                'message' => 'Brand Update Successfully',
                'alert-type' => 'warning'
            );

            return redirect()->route('all.brand')->with($notification);
            
        }

    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $notification = array(
            'message' => 'Brand Delete Successfully',
            'alert-type' => 'error'
        );  

        $old_img = $brand->brand_image;

        unlink($old_img);

        $brand->delete();
        return redirect()->back()->with($notification);

    }

    public function MultPic()
    {
        $images = Multipic::all();
        return view('admin.multiPic.index',compact('images'));
    }

    public function deleteMulti($id)
    {
        $images = Multipic::find($id);

        $old_image = $images->image;
        unlink($old_image);

        $images->delete();

        $notification = array(
            'message' => 'Brand Update Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    }

    public function storeImg(Request $request)
    {

        $brand_image = $request->file('image');

    if($brand_image)
    {


        foreach ($brand_image as $multi_img)
        {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($multi_img->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/multi/';
            $last_img = $up_location.$img_name;
            $multi_img->move($up_location,$img_name);

            Multipic::insert([
                'image'=>$last_img,
                'created_at'=>Carbon::now(),
            ]);
        }

    }else{
        Multipic::insert([
            'created_at'=>Carbon::now(),
        ]);  
    }

        return redirect()->back()->with('success','brand insert Successfull');
        
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success','user logout');
    }

    
}
