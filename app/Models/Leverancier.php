<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;
    protected $table = 'leverancier';

    public function contacten()
    {
        return $this->belongsToMany(Contact::class, 'contactperleverancier', 'leverancier_id', 'contact_id');
    }
}
