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
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id', 'patient_id');
    }
}
