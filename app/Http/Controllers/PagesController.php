<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $name = 'Iqbal';
        return view('pages.index')->with('name', $name);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $services = [
            'Service 1',
            'Service 2',
            'Service 3',
        ];
        return view('pages.services')->with('services', $services);
    }
}
