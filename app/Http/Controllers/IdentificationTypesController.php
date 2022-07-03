<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\IdentificationTypes;

class IdentificationTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identificationTypes = IdentificationTypes::paginate(10);

        return Inertia::render('IdentificationTypes', [
            'identificationTypesArr' => $identificationTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('NewIdentificationType');
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
     * @param  Integer  $identificationTypeId
     * @return \Illuminate\Http\Response
     */
    public function show($identificationTypeId)
    {
        return Inertia::render('ViewIdentificationType');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $identificationTypeId
     * @return \Illuminate\Http\Response
     */
    public function edit($identificationTypeId)
    {
        return Inertia::render('EditIdentificationType');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $identificationTypeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $identificationTypeId)
    {
        print_r("update" . $request . $identificationTypeId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $identificationTypeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($identificationTypeId)
    {
        print_r("destroy" . $identificationTypeId);
    }
}
