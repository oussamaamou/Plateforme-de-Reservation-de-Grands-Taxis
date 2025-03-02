<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trajet;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){

        $totalTrajets = $this->getTotalTrajets();
        $totalUsers = $this->getTotalUsers();
        $totalChauffeurs = $this->getTotalChauffeurs();
        $totalPassagers = $this->getTotalPassagers();
        $trajets = Trajet::all();
        
        return view('admin.dashboard', compact('totalTrajets', 'totalUsers', 'totalChauffeurs', 'totalPassagers', 'trajets'));
    }

    private function getTotalTrajets(){
        return Trajet::count();
    }

    private function getTotalUsers(){
        return User::count();
    }

    private function getTotalChauffeurs(){
        return User::where('role', 'Chauffeur')->count();
    }

    private function getTotalPassagers(){
        return User::where('role', 'Passager')->count();
    }

    public function getAllUsers(){

        $chauffeurs = User::where('role', 'Chauffeur')->get();
        $passagers = User::where('role', 'Passager')->get();

        return view('admin.userslistes', compact('chauffeurs', 'passagers'));
    }

    
}
