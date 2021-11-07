<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Pricing_line;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PricingController extends Controller
{

// pricing
    public function index()
    {
        $pricing = Pricing::all();
        $pricingBlog = Pricing_line::get();


        return view('page.pricing',compact('pricing','pricingBlog'));
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
// end pricing

// pricing info
//start pricingBlog


    public function pricingBlogAll()
    {

  
        $pricingBlog = Pricing_line::get();


        return view('admin.pricingBlog.index',compact('pricingBlog'));
    }

    public function pricingBlogCreate()
    {
        return view('admin.pricingBlog.create');
    }

    public function pricingBlogStore(Request $request)
    {

        // $title = explode(',',$request->title);
        // $title =  json_encode($title);

        // foreach ($title as $hatem) {
        //    echo $hatem.'<br>';
        // }
    


        $validate = $request->validate([
            'title'=>'required',
            'title_two'=>'required',
            'pricing'=>'required',
            'month'=>'required',
            'currency'=>'required',
            'pricing_desc'=>'required',
            'button'=>'required',
        ],
        [
            'title.required'=>'Please Input title',
            'title_two.required'=>'Please Input title_two',
            'pricing.required'=>'Please Input pricing',
            'month.required'=>'Please Input month',
            'currency.required'=>'Please Input currency',
            'pricing_desc.required'=>'Please Input pricing_desc',
            'button.required'=>'Please Input button',
        ]);

        
        Pricing_line::create([
            'title'=> ['ar'=>$request->title_ar, 'en' => $request->title],
            'title_two'=> ['ar'=>$request->title_two_ar, 'en' => $request->title_two],
            'pricing'=>$request->pricing,
            'month'=> ['ar'=>$request->month_ar, 'en' => $request->month],
            'currency'=> ['ar'=>$request->currency_ar, 'en' => $request->currency],
            'pricing_desc'=> ['ar'=>json_encode(explode(',',$request->pricing_desc_ar)), 'en' =>json_encode(explode(',',$request->pricing_desc))],
            'button'=> ['ar'=>$request->button_ar, 'en' => $request->button],
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('pricingBlog')->with('success','pricingBlog insert Successfull');
    }  

    public function pricingBlogEdit($id)
    {
        
        $pricingBlog = Pricing_line::find($id);


        
        

        return view('admin.pricingBlog.edit',compact('pricingBlog'));
    }

    public function pricingBlogUpdate(Request $request,$id)
    {

        $validate = $request->validate([
            'title'=>'required',
            'title_two'=>'required',
            'pricing'=>'required',
            'month'=>'required',
            'currency'=>'required',
            'pricing_desc'=>'required',
            'button'=>'required',
        ],
        [
            'title.required'=>'Please Input title',
            'title_two.required'=>'Please Input title_two',
            'pricing.required'=>'Please Input pricing',
            'month.required'=>'Please Input month',
            'currency.required'=>'Please Input currency',
            'pricing_desc.required'=>'Please Input pricing_desc',
            'button.required'=>'Please Input button',
        ]);

        Pricing_line::find($id)->update([
            'title'=> $request->title,
            'title_two'=>$request->title_two,
            'pricing'=> $request->pricing,
            'month'=>  $request->month,
            'currency'=>  $request->currency,
            'pricing_desc'=> json_encode(explode(',',$request->pricing_desc)),
            'button'=> $request->button,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('pricingBlog')->with('success','pricingBlog Edit Successfull');
    }


    public function pricingBlogDelete($id)
    {
        
        $pricingBlog = Pricing_line::find($id)->delete();
        return redirect()->route('pricingBlog')->with('success','pricingBlog delete Successfull');
    }

//end pricing end
}
