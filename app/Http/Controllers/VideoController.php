<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index',compact('videos'));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'video_iframe'=>'required',
            'title'=>'required',
            'desc'=>'required',
        ],
        [
            'video_iframe.required'=>'Please Input video video_iframe',
            'title.required'=>'Please Input video title',
            'desc.required'=>'Please Input video desc',
        ]);
        video::create([
            'video_iframe'=> $request->video_iframe,
            'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
            'desc'=>['ar'=>$request->desc_ar, 'en' => $request->desc],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('video')->with('success','video insert Successfull');
    }

    public function edit($id)
    {
        $video = video::find($id);
        return view('admin.video.edit',compact('video'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'video_iframe'=>'required',
            'title'=>'required',
            'desc'=>'required',
        ],
        [
            'video_iframe.required'=>'Please Input video video_iframe',
            'title.required'=>'Please Input video title',
            'desc.required'=>'Please Input video desc',
        ]);
        video::find($id)->update([
            'video_iframe'=> $request->video_iframe,
            'title'=> $request->title,
            'desc'=>$request->desc,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('video')->with('success','video update Successfull');
    }


    public function delete($id)
    {
        $video = video::find($id)->delete();
        return redirect()->route('video')->with('success','video insert Successfull');
    }
}
