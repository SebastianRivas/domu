<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\UserTypes;

class UserTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTypes = UserTypes::paginate(10);
        
        return Inertia::render('UserTypes', [
            'userTypesArr' => $userTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('NewUserType');
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
     * @param  Integer  $userTypeId
     * @return \Illuminate\Http\Response
     */
    public function show($userTypeId)
    {
        return Inertia::render('ViewUserType');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $userTypeId
     * @return \Illuminate\Http\Response
     */
    public function edit($userTypeId)
    {
        return Inertia::render('EditUserType');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $userTypeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userTypeId)
    {
        print_r("update" . $request . $userTypeId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $userTypeId
     * @return \Illuminate\Http\Response
     */
    public function destroy($userTypeId)
    {
        print_r("destroy" . $userTypeId);
    }
}
