<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

use App\Models\Profiles;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profiles::where('user_id', '=', Auth::id())->get();
            
        return Inertia::render('Profile', [
            'userData' => Auth::user(),
            'profileData' => $profile,
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
     * @param  Integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        print_r("show" . $userId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        print_r("edit" . $userId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId)
    {
        print_r("update" . $request . $userId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $userId
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        print_r("destroy" . $userId);
    }
}
