<?php

namespace App\Http\Controllers;

use App\Models\beranda; 
use App\Models\Carousel;
use App\Models\Berita;
use App\Http\Requests\StoreberandaRequest;
use App\Http\Requests\UpdateberandaRequest;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::all();
        $berita = Berita::all();
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
     * @param  \App\Http\Requests\StoreberandaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreberandaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show(beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit(beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateberandaRequest  $request
     * @param  \App\Models\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateberandaRequest $request, beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(beranda $beranda)
    {
        //
    }
}
