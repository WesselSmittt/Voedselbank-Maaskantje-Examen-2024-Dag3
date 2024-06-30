<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'producten';
    protected $fillable = [
        'categorie_id',
        'naam',
        'soort_allergie',
        'barcode',
        'houdbaarheidsdatum',
        'omschrijving',
        'status'
    ];

    public function productPerVoedselpakketten()
    {
        return $this->hasMany(ProductPerVoedselpakket::class);
    }
}
