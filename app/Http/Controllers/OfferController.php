<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return response()->json($offers); 
    }

    public function show(Offer $offer)
    {
        return response()->json($offer); 
    }
}
