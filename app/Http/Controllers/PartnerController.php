<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
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
        $data = partner::all();
        return view('partners.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.partners');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = partner::create($request->all());
        return redirect()->route('thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(partner $partner)
    {
        return view('partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(partner $partner)
    {
        $partner->delete();
        return redirect()->route('partner.index')->with('success', 'Deleted Successfully');
    }
}
