<?php

namespace App\Http\Controllers\ChauffeurPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function index(){
        
        return view('chauffeur.dashboard');
    }
}
