<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voedselpakket extends Model
{
    use HasFactory;

    protected $table = 'voedselpakket';

    protected $fillable = [
        'gezin_id',
        'pakket_nummer',
        'datum_samenstelling',
        'datum_uitgifte',
        'status'
    ];

    public function gezin()
    {
        return $this->belongsTo(Gezin::class);
    }

    public function producten()
    {
        return $this->hasMany(ProductPerVoedselpakket::class);
    }
}
