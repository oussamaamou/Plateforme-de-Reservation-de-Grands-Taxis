<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trajet;
use App\Jobs\UpdateReservationStatus;


class TrajetController extends Controller
{
    public function create(Request $request){

        $data = $request->validate([

            'dateDepart' => 'required|date',
            'dateArrivee' => 'required|date',
            'lieuDepart' => 'required|string',
            'lieuArrivee' => 'required|string',
            'passager_id' => 'required|numeric',
            'chauffeur_id' => 'required|numeric'

        ]);

        $newReservation = Trajet::create($data);

        UpdateReservationStatus::dispatch($newReservation->id)
        ->delay(now()->addHours(1));

        return redirect(route('passager.mesreservations'));

    }

    public function getMyReservation(){
        $reservations = Trajet::where('passager_id', auth()->id())->where('etat', 'En attente')->with('passager')->get();
        return view('passager/mesreservations', ['reservations' => $reservations]);
    }

    public function getAllReservations(){
        $reservations = Trajet::where('chauffeur_id', auth()->id())->where('etat', 'En attente')->with('chauffeur')->get();
        return view('chauffeur/reservations', ['reservations' => $reservations]);
    }
}
