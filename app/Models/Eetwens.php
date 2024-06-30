<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eetwens extends Model
{
    use HasFactory;

    protected $table = 'eetwens';

    protected $fillable = [
        'naam',
        'omschrijving'
    ];

    public function gezinnen()
    {
        return $this->hasMany(EetwensPerGezin::class);
    }
}
