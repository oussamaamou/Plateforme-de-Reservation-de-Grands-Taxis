<?php

namespace App\Http\Controllers\PassagerPanel;

use App\Http\Controllers\Controller;
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
}
