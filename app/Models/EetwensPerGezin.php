<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EetwensPerGezin extends Model
{
    use HasFactory;

    protected $table = 'eetwenspergezin';

    protected $fillable = [
        'gezin_id',
        'eetwens_id'
    ];

    public function gezin()
    {
        return $this->belongsTo(Gezin::class);
    }

    public function eetwens()
    {
        return $this->belongsTo(Eetwens::class);
    }
}
