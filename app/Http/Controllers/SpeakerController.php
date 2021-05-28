<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers=Speaker::get();
        return view('FrontPages.speakers',[
            'speakers' => $speakers
        ]);
    }
    public function create()
    {
        return view('FrontPages.registerspeakers');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min: 3|max: 50',
            'email'  => 'required|email|',
            'phone'  => 'numeric|starts_with:010,012,011',
            'job'   =>'required|string',
            'link' =>'required|string',
            'message'   => 'required|string',
            'governorate'   => 'required|string',
            'Company'  => 'required|string',
            'file'  => 'required|image|mimes:jpg,bmp,png',
            'message2'  => 'required|string',
        ]);

        $path=Storage::putFile("speakers",$request->file('file'));

        $workshops = Speaker::where('email', '=', $request->input('email'))->first();
if ($workshops === null) {
        Speaker::create([
            'fullname'=>$request->name,
            'email'=>$request->email, 
            'Phonenum' =>$request->phone,
            'jobtittle'=>$request->job,
            'Linked_In_Profile_Link'=>$request->link,
            'bio'=>$request->message,
            'governorate'=>$request->governorate, 
            'company'=>$request->Company,
            'image_upload'=>$path, 
            'comment'=>$request->message2
        ]);
        return redirect()->route('thanks');
    } else {
        return redirect(url('/speakers/create'));
    }
    }
    public function show($id){
        $speaker = new Speaker;
        
        $speaker = $speaker->findorfail($id);
       
        return view("FrontPages.speaker", ["data"=> $speaker]);
    }
}
