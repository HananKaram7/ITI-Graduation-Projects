<?php

namespace App\Http\Controllers;

use App\Models\hackathon;
use Illuminate\Http\Request;

class HackathonController extends Controller
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
        $data = hackathon::all();
        return view('hackathon.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hackathon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(['name'=>'required|string|max:255',
        // 'email'=>'required|email|regex:/^.+@.+$/i',
        // 'phonenum'=>'required|numeric|starts_with:010,012,011',
        // 'workshop_attend'=>'required|string',
        // 'Experience'=>'required',
        // 'workshops'=>'required|string',
       
        // ]);

        
        $data = hackathon::create($request->all());
        return redirect()->route('thanks'); // ->with('success', 'Customer Added Successfully') 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function show(hackathon $hackathon)
    {
        return view('hackathon.show', compact('hackathon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function edit(hackathon $hackathon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hackathon $hackathon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function destroy(hackathon $hackathon)
    {
        $hackathon->delete();
        return redirect()->route('hackathon.index')->with('success', 'Deleted Successfully');
    }
}
