<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePopRequest;
use App\Http\Requests\UpdatePopRequest;
use App\Models\Pop;

class PopController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function show(Pop $pop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function edit(Pop $pop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePopRequest  $request
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePopRequest $request, Pop $pop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pop $pop)
    {
        //
    }
}
