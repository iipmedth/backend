<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients_from_therapist extends Model
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

    public function patients()
    {
        return $this->hasMany(Patient::class, 'patient_id', 'id');
    }
}
