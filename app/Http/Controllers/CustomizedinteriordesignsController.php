<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomizedinteriordesignsController extends Controller
{
    public function index(){
        return view('content.pages.customized_interior_designs');
    }
}
