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
        $properties = DB::table('properties')
            ->join('profiles', 'properties.user_id', '=', 'profiles.user_id')
            ->join('property_details', 'properties.id', '=', 'property_details.property_id')
            ->orderBy('properties.created_at', 'asc')
            ->select('properties.id as property_id', 'property_details.name as property_name', 'property_details.location as property_location', 'profiles.first_name as user_first_name', 'profiles.last_name as user_last_name')
            ->paginate(10);

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
        print_r("create");
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
     * @param  Integer  $propertyId
     * @return \Illuminate\Http\Response
     */
    public function show($propertyId)
    {
        print_r("show" . $propertyId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $propertyId
     * @return \Illuminate\Http\Response
     */
    public function edit($propertyId)
    {
        print_r("edit" . $propertyId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $propertyId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $propertyId)
    {
        print_r("update" . $request . $propertyId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $propertyId
     * @return \Illuminate\Http\Response
     */
    public function destroy($propertyId)
    {
        print_r("destroy" . $propertyId);
    }
}
