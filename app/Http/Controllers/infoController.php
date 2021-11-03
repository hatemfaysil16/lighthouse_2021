<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class infoController extends Controller
{
    
    public function index()
    {
        $infos = Info::all();
        return view('admin.info.index',compact('infos'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    public function store(Request $request)
    {
 
        $brand_image = $request->file('logo_img');

        if($brand_image)
        {

            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/info/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location,$img_name);



            Info::create([
                'logo_img'=> $last_img,
                'address'=>['ar'=>$request->address_ar, 'en' => $request->address],
                'phone_one'=> $request->phone_one,
                'phone_two'=> $request->phone_two,
                'email'=>$request->email,
                'link_site'=> $request->link_site,
                'logo_text'=>['ar'=>$request->logo_text_ar, 'en' => $request->logo_text],
                'text_footer'=>['ar'=>$request->text_footer_ar, 'en' => $request->text_footer],
                'desc_footer'=>['ar'=>$request->desc_footer_ar, 'en' => $request->desc_footer],
                'created_at'=>Carbon::now(),
            ]);
        }else{
            Info::create([
                'address'=>['ar'=>$request->address_ar, 'en' => $request->address],
                'phone_one'=> $request->phone_one,
                'phone_two'=> $request->phone_two,
                'email'=>$request->email,
                'link_site'=> $request->link_site,
                'logo_text'=>['ar'=>$request->logo_text_ar, 'en' => $request->logo_text],
                'text_footer'=>['ar'=>$request->text_footer_ar, 'en' => $request->text_footer],
                'desc_footer'=>['ar'=>$request->desc_footer_ar, 'en' => $request->desc_footer],
                'created_at'=>Carbon::now(),
            ]);
        }

        return redirect()->route('info')->with('success','info insert Successfull');
    }

    public function edit($id)
    {
        $infos = Info::find($id);
        return view('admin.info.edit',compact('infos'));
    }

    public function update(Request $request,$id)
    {    



        $brand_image = $request->file('logo_img');
        if($brand_image)
        {

            $old_image = $request->oldImg;
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/info/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location,$img_name);
            unlink($old_image);
    
    
    
            Info::find($id)->update([
                'logo_img'=> $last_img,
                'address'=> $request->address,
                'phone_one'=> $request->phone_one,
                'phone_two'=> $request->phone_two,
                'email'=>$request->email,
                'link_site'=> $request->link_site,
                'logo_text'=>$request->logo_text,
                'text_footer'=>$request->text_footer,
                'desc_footer'=>$request->desc_footer,
                'created_at'=>Carbon::now(),
            ]);
        }else{
            Info::find($id)->update([
                'address'=> $request->address,
                'phone_one'=> $request->phone_one,
                'phone_two'=> $request->phone_two,
                'email'=>$request->email,
                'link_site'=> $request->link_site,
                'logo_text'=> $request->logo_text,
                'text_footer'=>$request->text_footer,
                'desc_footer'=>$request->desc_footer,
                'created_at'=>Carbon::now(),
            ]); 
        }

        return redirect()->route('info')->with('success','info update Successfull');
    }


    public function delete($id)
    {
        $info = Info::find($id);
        if($info){
            $old_image = $info->logo_img;
            unlink($old_image);
            $info->delete();
        }
        return redirect()->route('info')->with('success','info insert Successfull');
    }
}
