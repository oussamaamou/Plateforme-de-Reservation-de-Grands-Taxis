<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Trajet;
use Carbon\Carbon;

class UpdateReservationStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reservationId;


    /**
     * Execute the job.
     */
    public function handle()
    {
        $reservations = Trajet::where('etat', 'En attente')->where('created_at', '<=', Carbon::now()->subHours(1))->get();

        foreach ($reservations as $reservation) {
            $reservation->etat = 'Refuse';
            $reservation->save();
        }
    }
}
