<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $services = Service::all();
    return view('dashboard', compact('services'));
    }

    public function dashboard()
{
    $services = Service::all();
    return view('dashboard', compact('services'));
}



      public function about()
    {
       return View('about');
    }

    /**
     * Show the form for Dashboardeating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly Dashboardeated resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $Dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $Dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $Dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $Dashboard)
    {
        //
    }
}
