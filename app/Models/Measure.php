<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measures extends Model
{
    use HasFactory;

    protected $fillable = [
      'patient_id',
      'hand',
      'gender',
      'hand_length',
      'hand_breadth',
      'height_difference_1-2',
      'height_difference_3-5',
      'spread_1-2'
      'spread_1-3'
      'spread_1-4'
      'spread_1-5'
      'spread_2-3'
      'spread_2-4'
      'spread_2-5'
      'spread_3-4'
      'spread_3-5'
      'spread_4-5'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'patient_id');
    }
}
