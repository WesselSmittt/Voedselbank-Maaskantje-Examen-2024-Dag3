<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerVoedselpakket extends Model
{
    use HasFactory;

    protected $table = 'productpervoedselpakket';

    protected $fillable = [
        'voedselpakket_id',
        'product_id',
        'aantal_product_eenheden'
    ];

    public function voedselpakket()
    {
        return $this->belongsTo(Voedselpakket::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
