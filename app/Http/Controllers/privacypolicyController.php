<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacypolicyController extends Controller
{

    public function index()
    {
        return view('privacy-policy.index');
    }
}
