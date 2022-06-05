<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\StatusTypes;

class StatusTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusTypes = StatusTypes::paginate(10);

        return Inertia::render('StatusTypes', [
            'statusTypesArr' => $statusTypes,
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
     * @param  Integer  $statusTypeId
     * @return \Illuminate\Http\Response
     */
    public function show($statusTypeId)
    {
        print_r("show" . $statusTypeId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $statusTypeId
     * @return \Illuminate\Http\Response
     */
    public function edit($statusTypeId)
    {
        print_r("edit" . $statusTypeId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $statusTypeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $statusTypeId)
    {
        print_r("update" . $request . $statusTypeId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $statusTypeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($statusTypeId)
    {
        print_r("destroy" . $statusTypeId);
    }
}
