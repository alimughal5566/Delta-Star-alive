<?php

namespace App\Http\Controllers;

//use App\HomePage;
use App\HomeSlider;
use App\Models\Features;
use App\Models\GenaralSettings;
use App\Models\HomePage;
use App\Models\WhatWeDo;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use mail;

class GenaralSettingsController extends Controller
{
public function index(){
        return view('backend.generalsetting.index');
    }
public function update(Request $request){

        $data=GenaralSettings::where('id',1)->update([
            'phone2'=>$request['phone2'],
            'phone1'=>$request['phone1'],
            'address1'=>$request['address1'],
            'address2'=>$request['address2'],
            'email2'=>$request['email2'],
            'email1'=>$request['email1'],
            'location'=>$request['location'],
            'why_us'=>$request['why_us'],
            'about_us'=>$request['about_us'],
            'work_ethics'=>$request['work_ethics'],
            'cities'=>$request['cities'],
            'employee'=>$request['employee'],
            'clients'=>$request['clients'],
            'branches'=>$request['branches'],

        ]);
//        dd($data);
return redirect()->back()->with('status','updated successfully');
    }
public function aboutUs(){
    $features=Features::all();
    $general_settings=GenaralSettings::where('id',1)->get()->first();
  return view('frontend.aboutus',compact('general_settings','features'));
}
public function contectUs(){

$general_settings=GenaralSettings::where('id',1)->get()->first();
  return view('frontend.contectus',compact('general_settings'));
}
    public function quickMail(Request $request){

// dd($request);

        $title = $request->quick_contact_form_name;
        $email = $request->quick_contact_form_email;
        $phone = $request->quick_contact_form_phone;
        $content = $request->quick_contact_form_message;


        Mail::send('emails.quick-quote', ['title' => $title,'email'=>$email, 'content' => $content,'phone'=>$phone], function ($message) //use ($attach)
        {

            $message->from('info@deltastar.ae');
            $message->to('info@deltastar.ae');
            //Add a subject
            $message->subject("QUICK QUOTATION");

        });

        return response()->json('thenks for contact');
    }




public function contactUsMail(Request $request){

// dd($request);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->subject;
        $service = $request->service;
        $message1 = $request->message;


       Mail::send('emails.contect-us-mail', ['name' => $name,'email'=>$email, 'phone' => $phone, 'message1' => $message1, 'subject' => $subject, 'service' => $service], function ($message) //use ($attach)
        {
            $message->from('info@deltastar.ae');
            $message->to('info@deltastar.ae');
            //Add a subject
            $message->subject("Contect Us mail");

        });

        return response()->json('thenks for contact');
    }


public function homepageSlider(){
    $data=HomePage::all();
    return view('backend.generalsetting.home-page-slider',compact('data'));
}
public function addNewSlider(Request $request){
    if($request->hasFile('thumbnail')){
        $image = $request->file('thumbnail');
        $imageName = time().'slider'.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('assets/demos/construction/images/slider');
        $image->move($destinationPath, $imageName);
    }

    $data=HomePage::create([
        'title'=>$request->title,'thumbnail'=>$imageName??''
    ]);
    if($data){
        return redirect()->back()->with('status','data Added Successfully');
    }



}
public function deleteSlider($id){
    $data=HomePage::where('id',$id)->delete();
    if($data){
    return redirect()->back()->with('status','deleted successfully');
    }

}
public function editSlider($id)
    {
        $data = HomePage::where('id', $id)->get()->first();
        if ($data) {
            return view('backend.generalsetting.edit-page-slider',compact('data'));
        }
    }
public function updateSlider(Request $request){
//    dd($request);
        if($request ->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'slider'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/slider');
            $image->move($destinationPath, $imageName);
        }
        $data=HomePage::where('id',$request->id)->update([
            'title'=>$request->title,
            'thumbnail'=>$imageName??$request->thumbnail
        ]);
        if($data){
            return redirect()->route('homepage.slider')->with('status','data Updated Successfully');
        }
    }





    public function homeSecondSlider(){
        $data=HomeSlider::all();
        return view('backend.generalsetting.home-second-slider',compact('data'));
    }
    public function addSecondSlider(Request $request){
        if($request->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'slider'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/slider');
            $image->move($destinationPath, $imageName);
        }

        $data=HomeSlider::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumbnail'=>$imageName??''
        ]);
        if($data){
            return redirect()->back()->with('status','data Added Successfully');
        }



    }
    public function deleteSecondSlider($id){
        $data=HomeSlider::where('id',$id)->delete();
        if($data){
            return redirect()->back()->with('status','deleted successfully');
        }

    }
    public function editSecondSlider($id)
    {
        $data = HomeSlider::where('id', $id)->get()->first();
        if ($data) {
            return view('backend.generalsetting.edit-second-slider',compact('data'));
        }
    }
    public function updateSecondSlider(Request $request){
//    dd($request);
        if($request ->hasFile('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = time().'slider'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/demos/construction/images/slider');
            $image->move($destinationPath, $imageName);
        }
        $data=HomeSlider::where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumbnail'=>$imageName??$request->thumbnail
        ]);
        if($data){
            return redirect()->route('home.second.slider')->with('status','data Updated Successfully');
        }
    }

    public function requestQuote(){

        $general_settings=GenaralSettings::where('id',1)->get()->first();
        return view('frontend.requestquote',compact('general_settings'));
    }

    public function allServices(){
    $data=WhatWeDo::all();
    return view('frontend.all_services',compact('data'));
    }
    public function allProjects(){
        $data=Portfolio::all();
        return view('frontend.all_Projects',compact('data'));
    }
}
