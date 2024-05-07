<?php

// app/Models/PollingUnit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    use HasFactory;

    protected $table = 'polling_unit';

    protected $fillable = [
        'uniqueid',
        'polling_unit_name',
        // Add other fillable fields as needed
    ];

    public function announcedPuResults()
    {
        return $this->hasMany(AnnouncedPuResult::class, 'polling_unit_uniqueid', 'uniqueid');
    }
}
