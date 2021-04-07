<?php

namespace App\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Setting\Role as RoleModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Role extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Pages/Dashboard/Setting/Role', [
            'menu' => config('menu.dashboard')
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
     * @param  RoleModel  $item
     * @return \Illuminate\Http\Response
     */
    public function show(RoleModel $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  RoleModel  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleModel $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  RoleModel  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoleModel $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  RoleModel  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleModel $item)
    {
        //
    }
}
