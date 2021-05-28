<?php

namespace App\Http\Controllers;

use App\Models\startup;
use Illuminate\Http\Request;

class StartupController extends Controller
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
        $data = startup::all();
        return view('startup.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('startup.startup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = startup::create($request->all());
        return redirect()->route('thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function show(startup $startup)
    {
        return view('startup.show', compact('startup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function edit(startup $startup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, startup $startup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function destroy(startup $startup)
    {
        $startup->delete();
        return redirect()->route('startup.index')->with('success', 'Deleted Successfully');
    }
}
