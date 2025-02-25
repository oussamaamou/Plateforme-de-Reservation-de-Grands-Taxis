<?php

namespace App\Http\Controllers\PassagerPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassagerController extends Controller
{
    public function index(){
        
        return view('passager.dashboard');
    }
}
