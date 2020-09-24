<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Emprunt extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adherent_id',
        'book_id',
        'date_debut',
        'date_fin',
        'date_fin_reel',
    ];
}
