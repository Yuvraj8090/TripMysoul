<?php

namespace App\Http\Controllers;

use App\Models\Booking; // Corrected the namespace for Booking model
use App\Models\DatesPackage; // Corrected the namespace for DatesPackage model
use App\Models\DestinationDetail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $destinationDetails = DestinationDetail::all();

        return response()->json($destinationDetails);
    }

    public function show($name)
    {
        $destinationDetail = DestinationDetail::where('name_package', $name)->firstOrFail();
        $datesPackages = DatesPackage::where('Packages_name', $destinationDetail->id)
            ->orderBy('date_from')
            ->with('offer')
            ->get();

        return view('booking.show', compact('destinationDetail', 'datesPackages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'cust_name' => 'required|string|max:255',
            'cust_num' => 'required|string|max:20',
            'cust_email' => 'required|email|max:255',
            'cust_memb' => 'required|integer|min:1',
            'trip_start' => 'required|date',
            'days' => 'required|integer|min:1',
            'trip_end' => 'required|date',
            'total_amount' => 'required|numeric|min:0',
            'deposited_amount' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,confirmed,canceled',
        ]);

        $validated['trxid'] = 'TMS'.now()->timestamp;

        $booking = Booking::create($validated);

        return response()->json([
            'message' => 'Booking successfully created.',
            'booking' => $booking,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:pending,confirmed,canceled',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->status = $validated['status'];
        $booking->save();

        return response()->json([
            'message' => 'Booking status successfully updated.',
            'booking' => $booking,
        ], 200);
    }
}
