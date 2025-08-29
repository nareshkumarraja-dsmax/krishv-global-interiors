<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenovationController extends Controller
{
    public function index(){
        return view('content.pages.renovation');
    }
}
