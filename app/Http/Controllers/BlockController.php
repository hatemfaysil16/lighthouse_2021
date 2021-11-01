<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BlockController extends Controller
{
    public function index()
    {
        $blocks = Block::all();
        return view('admin.block.index',compact('blocks'));
    }

    public function create()
    {
        return view('admin.block.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'class_i'=>'required|unique:blocks',
            'title'=>'required|unique:blocks',
            'list'=>'required|unique:blocks',
        ],
        [
            'class_i.required'=>'Please Input block class_i',
            'title.required'=>'Please Input block title',
            'list.required'=>'Please Input block list',
        ]);
        Block::create([
            'class_i'=> $request->class_i,
            'title'=>['ar'=>$request->title_ar, 'en' => $request->title],
            'list'=>['ar'=>$request->list_ar, 'en' => $request->list],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('block')->with('success','block insert Successfull');
    }

    public function edit($id)
    {
        $blocks = Block::find($id);
        return view('admin.block.edit',compact('blocks'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'class_i'=>'required',
            'title'=>'required|unique:blocks',
            'list'=>'required|unique:blocks',
        ],
        [
            'class_i.required'=>'Please Input block class_i',
            'title.required'=>'Please Input block title',
            'list.required'=>'Please Input block list',
        ]);
        Block::find($id)->update([
            'class_i'=> $request->class_i,
            'title'=> $request->title,
            'list'=>$request->list,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('block')->with('success','block update Successfull');
    }


    public function delete($id)
    {
        $block = Block::find($id)->delete();
        return redirect()->route('block')->with('success','block insert Successfull');
    }
}
