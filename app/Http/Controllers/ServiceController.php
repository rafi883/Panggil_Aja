<?php

namespace App\Http\Controllers;

use App\Models\services;

class ServiceController extends Controller
{
    public function index()
    {
        $services = services::all();
        return view('service.index', compact('services'));
    }

}





