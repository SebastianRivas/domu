<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\EventTypes;

class EventTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventTypes = EventTypes::paginate(10);

        return Inertia::render('EventTypes', [
            'eventTypesArr' => $eventTypes,
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
     * @param  Integer  $eventTypeId
     * @return \Illuminate\Http\Response
     */
    public function show($eventTypeId)
    {
        print_r("show" . $eventTypeId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $eventTypeId
     * @return \Illuminate\Http\Response
     */
    public function edit($eventTypeId)
    {
        print_r("edit" . $eventTypeId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $eventTypeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eventTypeId)
    {
        print_r("update" . $request . $eventTypeId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $eventTypeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($eventTypeId)
    {
        print_r("destroy" . $eventTypeId);
    }
}
