<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
        $users = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->join('user_types', 'users.user_type', '=', 'user_types.id')
            ->orderBy('users.created_at', 'asc')
            ->select('users.id as user_id', 'users.email as user_email', 'profiles.first_name as user_first_name', 'profiles.last_name as user_last_name', 'user_types.name as user_type')
            ->paginate(10);

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
        print_r("store: " . $request);
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
