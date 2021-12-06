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
        'height_difference_1_3' => $request->get('height_difference_1_3'),
        'height_difference_3_5' => $request->get('height_difference_3_5'),
        'spread_1_2' => $request->get('spread_1_2'),
        'spread_1_3' => $request->get('spread_1_3'),
        'spread_1_4' => $request->get('spread_1_4'),
        'spread_1_5' => $request->get('spread_1_5'),
        'spread_2_3' => $request->get('spread_2_3'),
        'spread_2_4' => $request->get('spread_2_4'),
        'spread_2_5' => $request->get('spread_2_5'),
        'spread_3_4' => $request->get('spread_3_4'),
        'spread_3_5' => $request->get('spread_3_5'),
        'spread_4_5' => $request->get('spread_4_5'),
      ]);

      $newMeasure->save();

      return response()->json($newMeasure);
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
      $measure = Measure::findOrFail($id);

      $measure->gender = $request->get('gender');
      $measure->hand = $request->get('hand');
      $measure->hand_length = $request->get('hand_length');
      $measure->hand_breadth = $request->get('hand_breadth');
      $measure->height_difference_1_3 = $request->get('height_difference_1_3');
      $measure->height_difference_3_5 = $request->get('height_difference_3_5');
      $measure->spread_1_2 = $request->get('spread_1_2');
      $measure->spread_1_3 = $request->get('spread_1_3');
      $measure->spread_1_4 = $request->get('spread_1_4');
      $measure->spread_1_5 = $request->get('spread_1_5');
      $measure->spread_2_3 = $request->get('spread_2_3');
      $measure->spread_2_4 = $request->get('spread_2_4');
      $measure->spread_2_5 = $request->get('spread_2_5');
      $measure->spread_3_4 = $request->get('spread_3_4');
      $measure->spread_3_5 = $request->get('spread_3_5');
      $measure->spread_4_5 = $request->get('spread_4_5');

      $measure->save();

      return response()->json($measure);
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
