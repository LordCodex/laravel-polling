<?php
// app/Models/AnnouncedPuResult.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncedPuResult extends Model
{
    use HasFactory;

    protected $table = 'announced_pu_results';

    protected $fillable = [
        'polling_unit_uniqueid',
        'party_abbreviation',
        'party_score',
        // Add other fillable fields as needed
    ];

    public function pollingUnit()
    {
        return $this->belongsTo(PollingUnit::class, 'uniqueid', 'polling_unit_uniqueid');
    }
}
