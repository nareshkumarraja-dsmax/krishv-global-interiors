<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompletehomeinteriorsController extends Controller
{
    public function index(){
        return view('content.pages.complete_home_interiors');
    }
}
