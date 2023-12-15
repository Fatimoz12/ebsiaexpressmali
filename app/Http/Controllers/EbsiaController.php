<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbsiaController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
