<?php

namespace App\Http\Controllers;
use App\Models\Flower;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function about()
    {
        return view('components.about');
    }
}
