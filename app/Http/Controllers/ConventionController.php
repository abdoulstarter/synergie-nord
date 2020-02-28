<?php

namespace App\Http\Controllers;

use App\convention;
use Illuminate\Http\Request;

class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('conventions.index');
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
     * @param  \App\convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function show(convention $convention)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function edit(convention $convention)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, convention $convention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function destroy(convention $convention)
    {
        //
    }
}
