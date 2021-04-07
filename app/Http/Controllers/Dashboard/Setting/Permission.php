<?php

namespace App\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Setting\Permission as PermissionModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Permission extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Pages/Dashboard/Setting/Permission', [
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
     * @param  PermissionModel  $item
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionModel $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  PermissionModel  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionModel $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  PermissionModel  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermissionModel $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PermissionModel  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionModel $item)
    {
        //
    }
}
