<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Models\Multipic;
use App\Models\Social_media;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function HomeAbout()
    {
        $homeAbout = HomeAbout::latest()->get();
        return view('admin.home.index',compact('homeAbout'));
    }

    public function AddAbout()
    {
        return view('admin.home.create');
    }

    public function storeAbout(Request $request)
    {
        // return $request;die;
        $validate = $request->validate([
            'title'=>'required',
            'short_dis'=>'required',
            'long_dis'=>'required',
            'pointe'=>'required',
            'list'=>'required',
        ],
        [
            'title.required'=>'Please Input About title',
            'short_dis.required'=>'Please Input About short_dis',
            'long_dis.required'=>'Please Input About long_dis',
            'pointe.required'=>'Please Input About pointe',
            'list.required'=>'Please Input About list',
        ]);

        HomeAbout::create([
            'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
            'short_dis'=>['ar'=>$request->short_dis_ar, 'en' => $request->short_dis],
            'long_dis'=>['ar'=>$request->long_dis_ar, 'en' => $request->long_dis],
            'pointe'=>['ar'=>$request->pointe_ar, 'en' => $request->pointe],
            'list'=>['ar'=>$request->list_ar, 'en' => $request->list],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('home.about')->with('success','about insert Successfull');
    }

    public function EditAbout($id)
    {
        $homeAbout = HomeAbout::find($id);
        // return $homeAbout;die;
        return view('admin.home.edit',compact('homeAbout'));
    }

    public function updateAbout(Request $request,$id)
    {
        $validate = $request->validate([
            'title'=>'required',
            'short_dis'=>'required',
            'long_dis'=>'required',
            'pointe'=>'required',
            'list'=>'required',
         
        ],
        [
            'title.required'=>'Please Input About title',
            'short_dis.required'=>'Please Input About short_dis',
            'long_dis.required'=>'Please Input About long_dis',
            'pointe.required'=>'Please Input About pointe',
            'list.required'=>'Please Input About list',
        ]);
        HomeAbout::find($id)->update([
            'title'=> $request->title,
            'short_dis'=>$request->short_dis,
            'long_dis'=>$request->long_dis,
            'pointe'=>$request->pointe,
            'list'=>$request->list,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('home.about')->with('success','about update Successfull');
    }

    public function deleteAbout($id)
    {
        $delete = HomeAbout::find($id)->delete();
        return redirect()->route('home.about')->with('success','about Delete Successfull');
    }

    public function Portfolio()
    {
        $images = Multipic::all();


        return view('page.protfolio',compact('images'));
    }

    

}
