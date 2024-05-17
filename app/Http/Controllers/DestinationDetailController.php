<?php

namespace App\Http\Controllers;

use App\Models\DestinationDetail;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationDetailController extends Controller
{
    public function index()
    {
        $destinationdetails = DestinationDetail::all();
        return response()->json($destinationdetails); 
    }

    public function show(DestinationDetail $destinationdetail)
    {
        return response()->json($destinationdetail); 
    }

    public function showByName($name)
    {
        $destinationDetail = DestinationDetail::where('name_package', $name)->first();

        return view('destination.show', ['destinationDetail' => $destinationDetail]);
    }
}
