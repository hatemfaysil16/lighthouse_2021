<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Carbon\Carbon;
use Illuminate\Http\Request;

class mapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('admin.map.index',compact('maps'));
    }

    public function create()
    {
        return view('admin.map.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'map'=>'required',
        ],
        [
            'map.required'=>'Please Input map',
        ]);
        Map::create([
            'map'=> $request->map,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('map')->with('success','map insert Successfull');
    }

    public function edit($id)
    {
        $map = Map::find($id);
        return view('admin.map.edit',compact('map'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'map'=>'required',
        ],
        [
            'map.required'=>'Please Input map',
        ]);
        Map::find($id)->update([
            'map'=> $request->map,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('map')->with('success','map update Successfull');
    }


    public function delete($id)
    {
        $map = Map::find($id)->delete();
        return redirect()->route('map')->with('success','map insert Successfull');
    }
}
