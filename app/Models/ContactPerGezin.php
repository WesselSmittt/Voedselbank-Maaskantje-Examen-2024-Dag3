<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerGezin extends Model
{
    use HasFactory;

    protected $table = 'contact_per_gezins';

    protected $fillable = [
        'gezin_id',
        'contact_id',
    ];

    public function gezin()
    {
        return $this->belongsTo(Gezin::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
