<?php

namespace App\Http\Controllers;

use App\Models\WhatWeDo;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function homePortfolio(){
        $data=Portfolio::all();
        return view('backend.generalsetting.home-page-portfolio',compact('data'));
    }
    public function addNewPortfolio(Request $request){
        if($request->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'Portfolio'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/Portfolio');
            $image->move($destinationPath, $imageName);
        }

        $data=Portfolio::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'long_description'=>$request->long_description,
            'thumbnail'=>$imageName??''
        ]);
        if($data){
            return redirect()->back()->with('status','data Added Successfully');
        }



    }
    public function deletePortfolio($id){
        $data=Portfolio::where('id',$id)->delete();
        if($data){
            return redirect()->back()->with('status','deleted successfully');
        }

    }
    public function editPortfolio($id)
    {
        $data = Portfolio::where('id', $id)->get()->first();
        if ($data) {
            return view('backend.generalsetting.edit-portfolio',compact('data'));
        }
    }
    public function updatePortfolio(Request $request){
//dd($request->all());
        $data=Portfolio::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->long_description=$request->long_description;
        if($request ->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'feature'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/Portfolio');
            $image->move($destinationPath, $imageName);
            $data->thumbnail=$imageName;
        }
        $data->save();
        if($data){
            return redirect()->route('home.portfolio')->with('status','data Updated Successfully');
        }
    }
    public function portfolioDetails($id){
        $data = Portfolio::where('id', $id)->get()->first();
        return view('backend.generalsetting.portfolio-details',compact('data'));
    }
}
