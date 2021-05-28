<?php

namespace App\Http\Controllers;

use App\Models\workshop;
use Illuminate\Http\Request;

class RWorkshopscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store', 'create']);
    }
    
    public function index()
    {
        $workshops = workshop::all(); 
        return view("workshops.index",  ["data"=>$workshops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(workshop $workshop)
    {
        return view("workshops.show", ["data"=>$workshop]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(workshop $workshop)
    {
        return view("workshops.edit", ["data"=>$workshop]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workshop $workshop)
    {
        $request->validate([
            'name'=>'required|min: 3|max: 10',
            'email'=>'required|email|',
            'age'=>'numeric',
            'phone'=>'numeric|starts_with:010,012,011'
        ]);
        $speaker->update($request->all());
        return view("workshops.show", ["data"=>$speaker]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(workshop $workshop)
    {
        $workshop->delete();
        return redirect()->route('workshop.index');
        //
    }
}
