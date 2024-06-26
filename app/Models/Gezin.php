<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    use HasFactory;

    protected $table = 'gezins';

    public function representative()
    {
        return $this->hasOne(Persoon::class)->where('is_vertegenwoordiger', true);
    }
}
