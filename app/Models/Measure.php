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
      'span_1_2',
      'span_1_3',
      'span_1_4',
      'span_1_5',
      'span_2_3',
      'span_2_4',
      'span_2_5',
      'span_3_4',
      'span_3_5',
      'span_4_5',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'patient_id');
    }
}
