<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return response()->json($patients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPatient = new Patient([
          'user_id' => $request->get('user_id'),
          'name' => $request->get('name'),
          'gender' => $request->get('gender'),
          'date_of_birth' => $request->get('date_of_birth'),
          'instrument' => $request->get('instrument'),
        ]);

        $newPatient->save();

        return response()->json($newPatient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return response()->json($patient);
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
        $patient = Patient::findOrFail($id);

        $patient->user_id = $request->get('user_id');
        $patient->name = $request->get('name');
        $patient->gender = $request->get('gender');
        $patient->date_of_birth = $request->get('date_of_birth');
        $patient->instrument = $request->get('instrument');

        $patient->save();

        return response()->json($patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return response()->json($patient::all());
    }

    public function measure($id, $hand)
    {
      return Patient::find($id)->measures->where('hand', '=', $hand)->first();
    }

}
