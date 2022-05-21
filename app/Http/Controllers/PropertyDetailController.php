<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\PropertyDetail;

class PropertyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyDetails = PropertyDetail::all()->toArray();
        return array_reverse($propertyDetails); 
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
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyDetail $propertyDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyDetail $propertyDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyDetail $propertyDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyDetail $propertyDetail)
    {
        //
    }
}
