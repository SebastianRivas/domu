<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return Inertia::render('Users', [
            'usersArr' => $users,
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
     * @param  Integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function show(Integer $userId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function edit(Integer $userId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Integer $userId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $userId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integer $userId)
    {
        //
    }
}
