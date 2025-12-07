<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class DetailServiceController extends Controller
{
    public function index(){
        return view('detailService');
    }

    public function detail($id){
         $service = Service::findOrFail($id);

         return view('detailService', compact('service'));
    }
}
