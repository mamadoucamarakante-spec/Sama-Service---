<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom'       => 'required|max:100',
            'email'     => 'required|email',
            'telephone' => 'required',
            'service'   => 'required',
            'date'      => 'required|date',
            'heure'     => 'required',
            'message'   => 'nullable'
        ]);

        Reservation::create($validated);

        return redirect('/reservation')->with('success', 'Réservation envoyée !');
    }
}