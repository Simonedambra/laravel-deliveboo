<?php

namespace App\Http\Controllers;

use App\Models\restaurants;
use App\Http\Requests\StorerestaurantsRequest;
use App\Http\Requests\UpdaterestaurantsRequest;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerestaurantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(restaurants $restaurants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(restaurants $restaurants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterestaurantsRequest $request, restaurants $restaurants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(restaurants $restaurants)
    {
        //
    }
}