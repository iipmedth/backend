<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient_from_therapist;
use Illuminate\Support\Facades\Auth;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $patients_from_therapist = Patient_from_therapist::all();

      return response()->json($patients_from_therapist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newPatient_from_therapist = new Patient_from_therapist([
        'therapist_id' => $request->get('therapist_id'),
        'patient_id' => $request->get('patient_id'),
      ]);

      $newPatient_from_therapist->save();

      return response()->json($newPatient_from_therapist);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $patient_from_therapist = Patient_from_therapist::findOrFail($id);

      return response()->json($patient_from_therapist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $patient_from_therapist = Patient_from_therapist::findOrFail($id);

      $patient_from_therapist->therapist_id= $request->get('therapist_id');
      $patient_from_therapist->gender = $request->get('therapist_id');

      $patient_from_therapist->save();

      return response()->json($patient_from_therapist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $patient_from_therapist = Patient_from_therapist::findOrFail($id);
      $patient_from_therapist->delete();

      return response()->json($patient_from_therapist::all());
    }

    public function patients()
    {
      return Patient_from_therapist::where(Auth::user()->id)->patients;
    }
}
