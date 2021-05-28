<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    //
    public function create()
    {
        return view('FrontPages.workshopform');
    }
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|max:255',
        'email'=>'required|email|regex:/^.+@.+$/i',
        'phone'=>'required|numeric|starts_with:010,012,011',
        'Attend'=>'required|string',
        'Experience'=>'required',
        'techno'=>'required|string',
       
        ]);


        $workshops = Workshop::where('email', '=', $request->input('email'))->first();
if ($workshops === null) {
        Workshop::create([
        'name' => $request->name, 
        'email' => $request->email,
        'phonenum' => $request->phone,
        'workshop_attend' => $request->Attend,
        'Experience' => $request->Experience,
        'workshops' => $request->techno
        ]);
        return redirect()->route('thanks');
    } else {
        return redirect(url('workshop.register'));
    }
    }
}
