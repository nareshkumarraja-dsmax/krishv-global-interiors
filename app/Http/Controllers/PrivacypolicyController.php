<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function index(){
        return view('content.pages.privacy_policy');
    }
}
