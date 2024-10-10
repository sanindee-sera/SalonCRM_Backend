<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    // Specify the fields that are mass assignable
    protected $fillable = [
        'name',
        'slug',
        'description',
        'email',
        'date',
        'time',
        'status',
    ];

    /**
     * If needed, you can add custom mutators or accessors here.
     * For example, formatting the date or time, or handling special logic.
     */

    // Example: Custom mutator for date (if necessary)
    // public function setDateAttribute($value)
    // {
    //     $this->attributes['date'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    // }
}
