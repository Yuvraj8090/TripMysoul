<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'package_name' => 'required|string|max:255',
            'package_dates_start' => 'required|date',
            'package_dates_end' => 'required|date',
            'number_of_members' => 'required|integer',
        ]);

        // Create a new lead using the validated data
        $lead = Lead::create($validated);

        // Return a JSON response with the created lead
        return response()->json($lead, 201);
    }
}
