<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ateendes;

class AteendesController extends Controller
{
    public function create()
    {
        return view('FrontPages.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|min: 3|max: 15',
            'lname' => 'required|min: 3|max: 15',
            'email'  => 'required|email|',
            'num'  => 'numeric|starts_with:010,012,011',
            'Attending'   =>'required|string',
            'Estatus' =>'required|string',
            'governorate'   => 'required|string',
            'college'  => 'required|string',
            'comments'  => 'required|string',
        ]);

        $speakers = Ateendes::where('email', '=', $request->input('email'))->first();
if ($speakers === null) {
    Ateendes::create([
        'firstname'=>$request->fname,
        'lastname'=>$request->lname,
        'email'=>$request->email, 
        'Phonenum' =>$request->num,
        'attendingas'=>$request->Attending,
        'educationalstatus'=>$request->Estatus,
        'governorate'=>$request->governorate, 
        'college'=>$request->college,
        'comment'=>$request->comments
    ]);
    return redirect(url('home'));
} else {
    return redirect(url('register'));
}

     
    }
}
