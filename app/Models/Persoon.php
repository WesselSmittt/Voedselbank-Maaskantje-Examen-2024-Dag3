<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    protected $table = 'persoons';

    public function contact()
    {
        return $this->hasOneThrough(Contact::class, ContactPerGezin::class, 'gezin_id', 'id', 'gezin_id', 'contact_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    protected $table = 'persoon';

    protected $fillable = [
        'gezin_id',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'geboortedatum',
        'type_persoon',
        'IsVertegenwoordiger'
    ];

    public function gezin()
    {
        return $this->belongsTo(Gezin::class);
    }
}
