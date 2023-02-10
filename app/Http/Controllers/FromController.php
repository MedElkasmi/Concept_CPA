<?php

namespace App\Http\Controllers;

use App\Models\From;
use Illuminate\Http\Request;

class FromController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('admin.offers.froms.create', [
            'user' => $request->user(),
        ]);
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
     * @param  \App\Models\From  $from
     * @return \Illuminate\Http\Response
     */
    public function show(From $from)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\From  $from
     * @return \Illuminate\Http\Response
     */
    public function edit(From $from)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\From  $from
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, From $from)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\From  $from
     * @return \Illuminate\Http\Response
     */
    public function destroy(From $from)
    {
        //
    }
}
