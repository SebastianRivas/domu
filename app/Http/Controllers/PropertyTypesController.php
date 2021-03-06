<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\PropertyTypes;

class PropertyTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyTypes = PropertyTypes::paginate(10);

        return Inertia::render('PropertyTypes', [
            'propertyTypesArr' => $propertyTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('NewPropertyType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print_r("store" . $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $propertyTypeId
     * @return \Illuminate\Http\Response
     */
    public function show($propertyTypeId)
    {
        return Inertia::render('ViewPropertyType');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $propertyTypeId
     * @return \Illuminate\Http\Response
     */
    public function edit($propertyTypeId)
    {
        return Inertia::render('EditPropertyType');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $propertyTypeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $propertyTypeId)
    {
        print_r("update" . $request . $propertyTypeId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $propertyTypeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($propertyTypeId)
    {
        print_r("destroy" . $propertyTypeId);
    }
}
