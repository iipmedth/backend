<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TherapistOfPatient;
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
      $therapist_of_patients = TherapistOfPatient::all();

      return response()->json($therapist_of_patients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $new_therapist_of_patient = new TherapistOfPatient([
        'therapist_id' => $request->get('therapist_id'),
        'patient_id' => $request->get('patient_id'),
      ]);

      $new_therapist_of_patient->save();

      return response()->json($new_therapist_of_patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $therapist_of_patient = TherapistOfPatient::findOrFail($id);

      return response()->json($therapist_of_patient);
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
      $therapist_of_patient = TherapistOfPatient::findOrFail($id);

      $therapist_of_patient->therapist_id= $request->get('therapist_id');
      $therapist_of_patient->patient_id = $request->get('patient_id');

      $therapist_of_patient->save();

      return response()->json($therapist_of_patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $therapist_of_patient = TherapistOfPatient::findOrFail($id);
      $therapist_of_patient->delete();

      return response()->json($therapist_of_patient::all());
    }

    public function patients()
    {
      $user_id = Auth::user()->id;
      return TherapistOfPatient::with('patient')->where('therapist_id','=',$user_id)->get();
    }
}
