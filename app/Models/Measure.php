<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $fillable = [
      'patient_id',
      'hand',
      'gender',
      'hand_length',
      'hand_breadth',
      'height_difference_1_3',
      'height_difference_3_5',
      'spread_1_2',
      'spread_1_3',
      'spread_1_4',
      'spread_1_5',
      'spread_2_3',
      'spread_2_4',
      'spread_2_5',
      'spread_3_4',
      'spread_3_5',
      'spread_4_5',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'patient_id');
    }
}
