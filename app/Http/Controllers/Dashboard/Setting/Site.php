<?php

namespace App\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Setting\Site as SiteModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Site extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Pages/Dashboard/Setting/Site', [
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
     * @param  SiteModel  $item
     * @return \Illuminate\Http\Response
     */
    public function show(SiteModel $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  SiteModel  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteModel $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  SiteModel  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteModel $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  SiteModel  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteModel $item)
    {
        //
    }
}
