<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    use HasFactory;

    protected $table = 'gezin';

    protected $fillable = [
        'naam',
        'code',
        'aantal_volwassenen',
        'aantal_kinderen',
        'aantal_babys',
        'totaal_aantal_personen'
    ];

    public function personen()
    {
        return $this->hasMany(Persoon::class);
    }

    public function eetwensen()
    {
        return $this->hasMany(EetwensPerGezin::class);
    }

    public function voedselpakketten()
    {
        return $this->hasMany(Voedselpakket::class);
    }
}
