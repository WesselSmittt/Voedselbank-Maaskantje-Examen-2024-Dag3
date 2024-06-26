<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    public static function getContactsByLeverancierIds($leverancierIds = [1, 2, 3, 4, 5, 6, 7, 8])
    {
        return DB::table('contact')
            ->join('contactperleverancier', 'contact.id', '=', 'contactperleverancier.contact_id')
            ->join('leverancier', 'leverancier.id', '=', 'contactperleverancier.leverancier_id')
            ->whereIn('leverancier.id', $leverancierIds)
            ->select('contact.*')
            ->get();
    }
}