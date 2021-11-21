<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function homeFeatures(){
        $data=Features::all();
//        dd($data);
        return view('backend.generalsetting.home-page-featuers',compact('data'));
    }
    public function addNewFeatures(Request $request){
        if($request->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'feature'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/features');
            $image->move($destinationPath, $imageName);
        }

        $data=Features::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumbnail'=>$imageName??''
        ]);
        if($data){
            return redirect()->back()->with('status','data Added Successfully');
        }



    }
    public function deleteFeatures($id){
        $data=Features::where('id',$id)->delete();
        if($data){
            return redirect()->back()->with('status','deleted successfully');
        }

    }
    public function editFeatures($id)
    {
        $data = Features::where('id', $id)->get()->first();
        if ($data) {
            return view('backend.generalsetting.home-edit-featuers',compact('data'));
        }
    }
    public function updateFeatures(Request $request){
//    dd($request);
        if($request ->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'feature'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/features');
            $image->move($destinationPath, $imageName);
        }
        $data=Features::where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumbnail'=>$imageName??$request->thumbnail
        ]);
        if($data){
            return redirect()->route('home.features')->with('status','data Updated Successfully');
        }
    }

}
