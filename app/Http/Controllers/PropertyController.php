<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        return Inertia::render('Properties', [
            'propertiesArr' => $properties,
        ]);
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
     * @param  Integer  $propertyId
     * @return \Illuminate\Http\Response
     */
    public function show(Integer $propertyId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $propertyId
     * @return \Illuminate\Http\Response
     */
    public function edit(Integer $propertyId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $propertyId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Integer $propertyId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $propertyId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integer $propertyId)
    {
        //
    }
}
