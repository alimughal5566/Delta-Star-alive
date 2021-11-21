<?php

namespace App\Http\Controllers;

use App\Models\Features;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function homeWhatWeDo(){
        $data=WhatWeDo::all();
//        dd($data);
        return view('backend.generalsetting.home-page-whatwedo',compact('data'));
    }
    public function addNewWhatWeDo(Request $request){
        if($request->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'feature'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/whatwedo');
            $image->move($destinationPath, $imageName);
        }

        $data=WhatWeDo::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'long_description'=>$request->long_description,
            'thumbnail'=>$imageName??''
        ]);
        if($data){
            return redirect()->back()->with('status','data Added Successfully');
        }



    }
    public function deleteWhatWeDo($id){
        $data=WhatWeDo::where('id',$id)->delete();
        if($data){
            return redirect()->back()->with('status','deleted successfully');
        }

    }
    public function editWhatWeDo($id)
    {
        $data = WhatWeDo::where('id', $id)->get()->first();
        if ($data) {
            return view('backend.generalsetting.edit-whatwedo',compact('data'));
        }
    }
    public function updateWhatWeDo(Request $request){
//    dd($request);
        if($request ->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'feature'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/WhatWeDo');
            $image->move($destinationPath, $imageName);
        }
        $data=WhatWeDo::where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'long_description'=>$request->long_description,
            'thumbnail'=>$imageName??''
        ]);
        if($data){
            return redirect()->route('home.whatwedo')->with('status','data Updated Successfully');
        }
    }



    public function whatwedoDetails($id){
        $data = WhatWeDo::where('id', $id)->get()->first();
        return view('backend.generalsetting.what-we-do-details',compact('data'));
    }
}
