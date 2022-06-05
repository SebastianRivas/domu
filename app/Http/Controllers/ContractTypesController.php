<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\ContractTypes;

class ContractTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractTypes = ContractTypes::paginate(10);

        return Inertia::render('ContractTypes', [
            'contractTypesArr' => $contractTypes,
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
     * @param  Integer  $contractTypeId
     * @return \Illuminate\Http\Response
     */
    public function show($contractTypeId)
    {
        print_r("show" . $contractTypeId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $contractTypeId
     * @return \Illuminate\Http\Response
     */
    public function edit($contractTypeId)
    {
        print_r("edit" . $contractTypeId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $contractTypeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contractTypeId)
    {
        print_r("update" . $request . $contractTypeId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $contractTypeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($contractTypeId)
    {
        print_r("destroy" . $contractTypeId);
    }
}
