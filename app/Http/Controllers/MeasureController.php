<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measure;
use Illuminate\Support\Facades\Auth;

class MeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $measures = Measure::all();

      return response()->json($measures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newMeasure = new Measure([
        'patient_id'  => $request->get('patient_id'),
        'gender' => $request->get('gender'),
        'hand' => $request->get('hand'),
        'hand_length' => $request->get('hand_length'),
        'hand_breadth' => $request->get('hand_breadth'),
        'height_difference_1-2' => $request->get('height_difference_1-3'),
        'height_difference_3-5' => $request->get('height_difference_3-5'),
        'spread_1-2' => $request->get('spread_1-2')
        'spread_1-3' => $request->get('spread_1-3')
        'spread_1-4' => $request->get('spread_1-4')
        'spread_1-5' => $request->get('spread_1-5')
        'spread_2-3' => $request->get('spread_2-3')
        'spread_2-4' => $request->get('spread_2-4')
        'spread_2-5' => $request->get('spread_2-5')
        'spread_3-4' => $request->get('spread_3-4')
        'spread_3-5' => $request->get('spread_3-5')
        'spread_4-5' => $request->get('spread_4-5')
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
      $measure = Measure::findOrFail($id);

      return response()->json($measure);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $measure = Measure::findOrFail($id);
      $measure->delete();

      return response()->json($measure::all());
    }
}
