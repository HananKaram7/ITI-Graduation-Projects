<?php

namespace App\Http\Controllers;

use App\Models\attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
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
        $data = attendee::all();
        return view('attendee.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendee.attendee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = attendee::create($request->all());
        return redirect()->route('thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function show(attendee $attendee)
    {
        return view('attendee.show', compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function edit(attendee $attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attendee $attendee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendee $attendee)
    {
        $attendee->delete();
        return redirect()->route('attendee.index')->with('success', 'Deleted Successfully');
    }
}
