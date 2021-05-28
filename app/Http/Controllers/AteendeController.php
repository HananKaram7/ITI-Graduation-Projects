<?php

namespace App\Http\Controllers;

use App\Models\Ateendes;
use Illuminate\Http\Request;

class AteendeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ateendes = Ateendes::all(); 
        return view("ateendes.index",  ["data"=>$ateendes]);
        //
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
     * @param  \App\Models\Ateendes  $ateendes
     * @return \Illuminate\Http\Response
     */
    public function show(Ateendes $ateendes)
    {
        return view("ateendes.show", ["data"=>$ateendes]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ateendes  $ateendes
     * @return \Illuminate\Http\Response
     */
    public function edit(Ateendes $ateendes)
    {
        return view("ateendes.edit", ["data"=>$ateendes]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ateendes  $ateendes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ateendes $ateendes)
    {
        $request->validate([
            'name'=>'required|min: 3|max: 10',
            'email'=>'required|email|',
            'age'=>'numeric',
            'phone'=>'numeric|starts_with:010,012,011'
        ]);
        $ateendes->update($request->all());
        return view("ateendes.show", ["data"=>$ateendes]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ateendes  $ateendes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ateendes $ateendes)
    {
        $ateendes->delete();
        return redirect()->route('ateende.index');
        //
    }
}
