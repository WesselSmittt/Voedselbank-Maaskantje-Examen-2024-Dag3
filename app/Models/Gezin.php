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
        return $this->hasOne(Persoon::class, 'gezin_id')->where('is_vertegenwoordiger', true);
    }

    public function members()
    {
        return $this->hasMany(Persoon::class, 'gezin_id')->where('IsVertegenwoordiger', 0);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_per_gezin', 'gezin_id', 'contact_id');
    }
}
