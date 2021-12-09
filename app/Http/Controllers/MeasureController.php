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
        'span_1_2' => $request->get('span_1_2'),
        'span_1_3' => $request->get('span_1_3'),
        'span_1_4' => $request->get('span_1_4'),
        'span_1_5' => $request->get('span_1_5'),
        'span_2_3' => $request->get('span_2_3'),
        'span_2_4' => $request->get('span_2_4'),
        'span_2_5' => $request->get('span_2_5'),
        'span_3_4' => $request->get('span_3_4'),
        'span_3_5' => $request->get('span_3_5'),
        'span_4_5' => $request->get('span_4_5'),
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
      $measure->span_1_2 = $request->get('span_1_2');
      $measure->span_1_3 = $request->get('span_1_3');
      $measure->span_1_4 = $request->get('span_1_4');
      $measure->span_1_5 = $request->get('span_1_5');
      $measure->span_2_3 = $request->get('span_2_3');
      $measure->span_2_4 = $request->get('span_2_4');
      $measure->span_2_5 = $request->get('span_2_5');
      $measure->span_3_4 = $request->get('span_3_4');
      $measure->span_3_5 = $request->get('span_3_5');
      $measure->span_4_5 = $request->get('span_4_5');

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

    public function percentiles($patient_id, $hand)
    {
      $measure = Measure::where('patient_id', '=', $patient_id)->where('hand', '=', $hand)->first();
      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('hand_length', '<', $measure->hand_length)->count();
      $percentile1 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('hand_breadth', '<', $measure->hand_breadth)->count();
      $percentile2 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('height_difference_1_3', '<', $measure->height_difference_1_3)->count();
      $percentile3 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('height_difference_3_5', '<', $measure->height_difference_3_5)->count();
      $percentile4 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_1_2', '<', $measure->span_1_2)->count();
      $percentile5 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_1_3', '<', $measure->span_1_3)->count();
      $percentile6 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_1_4', '<', $measure->span_1_4)->count();
      $percentile7 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_1_5', '<', $measure->span_1_5)->count();
      $percentile8 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_2_3', '<', $measure->span_2_3)->count();
      $percentile9 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_2_4', '<', $measure->span_2_4)->count();
      $percentile10 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_2_5', '<', $measure->span_2_5)->count();
      $percentile11 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_3_4', '<', $measure->span_3_4)->count();
      $percentile12 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_3_5', '<', $measure->span_3_5)->count();
      $percentile13 = round($index / $total * 100, 0);

      $total = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->count();
      $index = Measure::where('hand', '=', $hand)->where('gender', '=', $measure->gender)->where('span_4_5', '<', $measure->span_4_5)->count();
      $percentile14 = round($index / $total * 100, 0);

      return response()->json([
        'hand_length' => $percentile1,
        'hand_breadth' => $percentile2,
        'height_difference_1_3' => $percentile3,
        'height_difference_3_5' => $percentile4,
        'span_1_2' => $percentile5,
        'span_1_3' => $percentile6,
        'span_1_4' => $percentile7,
        'span_1_5' => $percentile8,
        'span_2_3' => $percentile9,
        'span_2_4' => $percentile10,
        'span_2_5' => $percentile11,
        'span_3_4' => $percentile12,
        'span_3_5' => $percentile13,
        'span_4_5' => $percentile14,
      ]);
    }
}
