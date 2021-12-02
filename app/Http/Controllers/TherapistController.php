<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients_from_therapist;
use Illuminate\Support\Facades\Auth;

class TherapistController extends Controller
{
  public function patients()
  {
    return Patients_from_therapist::where(Auth::user()->id)->patients;
  }
}
