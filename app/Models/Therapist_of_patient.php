<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist_of_patient extends Model
{
    use HasFactory;

    protected $fillable = [
      'therapist_id',
      'patient_id',
    ];

    public function therapist()
    {
        return $this->belongsTo(User::class, 'id', 'therapist_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
