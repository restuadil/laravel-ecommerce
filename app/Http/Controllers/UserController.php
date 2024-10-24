<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('comments')
            ->orderBy('name', 'asc')
            ->paginate(10);

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $productComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $productComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, User $productComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $productComment)
    {
        //
    }
}
