<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubaController extends Controller
{
    public function index
    {
    	return view ('projects.index');
    }
}
