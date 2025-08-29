<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    public function index(){
        return view('content.pages.carrer');
    }
}
