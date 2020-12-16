<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function index(){
        return view('exampleVue');
    }
    public function create(){
        return view('exampleVue');
    }
}
