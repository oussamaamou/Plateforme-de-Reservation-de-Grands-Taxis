<?php

namespace App\Http\Controllers\PassagerPanel;

use App\Http\Controllers\Controller;
use App\Models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassagerController extends Controller
{
    public function index(){

        if(Auth::user()->role === 'Administrateur' ){

            return redirect()->route('admin.dashboard');
        }

        elseif(Auth::user()->role === 'Chauffeur' ){

            return redirect()->route('chauffeur.dashboard');
        }
        
        return view('dashboard');
    }

    public function mesReservations(){
        return view('passager.mesreservations');
    }

    public function detailsReservation(Trajet $reservation){

        return view('passager.detailstrajet', ['reservation' => $reservation]);
    }

}
