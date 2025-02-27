<?php

namespace App\Http\Controllers\ChauffeurPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function index(){
        
        return view('chauffeur.dashboard');
    }

    public function reservations(){

        return view('chauffeur.reservations');
    }

    public function getAllChauffeur(){

        $chauffeurs = User::where('role', 'Chauffeur')->get();
        return view('dashboard', ['chauffeurs' => $chauffeurs]);
    }
}
