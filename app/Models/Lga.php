<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    protected $table = 'lga';

    protected $primaryKey = 'uniqueid';

    protected $fillable = [
        'uniqueid',
        'lga_id',
        'lga_name',
        'state_id',
        'lga_description',
        'entered_by_user',
        'date_entered',
        'user_ip_address',
        // Add other fillable fields as needed
    ];
}
