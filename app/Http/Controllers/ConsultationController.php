<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('consultation');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'consultationType' => 'required|in:agricultural,veterinary',
            'description' => 'required|string',
            'date' => 'required|date',
            'timeSlot' => 'required|string'
        ]);

        $consultation = Consultation::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Consultation réservée avec succès',
            'data' => $consultation
        ]);
    }
}
