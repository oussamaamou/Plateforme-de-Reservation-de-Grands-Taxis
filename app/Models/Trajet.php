<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    // public $timestamps = false;

    protected $fillable = [
        'dateDepart',
        'dateArrivee',
        'lieuDepart',
        'lieuArrivee',
        'passager_id',
        'chauffeur_id'
    ];

    public function passager(){
        
        return $this->belongsTo(User::class, 'passager_id');
    }

    public function chauffeur(){

        return $this->belongsTo(User::class, 'chauffeur_id');
    }
}
