<?php

namespace App\Http\Controllers;

use App\Model\Performance;
use App\Model\TrackPerformanceAgreement;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = TrackPerformanceAgreement::orderBy('year', 'asc')->lists('year');
        $results = array();
        foreach($years as $year){
            $results[] = $year;
        }
        $data = array_unique($results);
        $tracks = TrackPerformanceAgreement::all();
        return view('pa.track_pa', ['years' => $data], ['tracks' => $tracks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pa.addTrackPerformance');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'mimes:pdf',
            'name' => 'max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['file' => 'ไฟล์จะต้องเป็น .pdf เท่านั้น'])->withInput();
        }

        $trackPerformances = TrackPerformanceAgreement::where('year', '=', $request->get('year'))->where('period', '=', $request->get('period'))->get();
        if(sizeof($trackPerformances) > 0) {
            foreach ($trackPerformances as $performance) {
                $filename = base_path() . '/public/uploads/TrackPerformances-' . $request->get('year') . '/'.$request->get('period'). '/' . $performance->file_path;
                if (File::exists($filename)) {
                    File::delete($filename);
                }
                TrackPerformanceAgreement::destroy($performance->id);
            }
        }


        if(Input::file('file')->isValid()){

            $filePath = date('Ymd_His').'.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/TrackPerformances-' . $request->get('year').'/'.$request->get('period'), $filePath)) {
                //example of delete exist file

                $performance = new TrackPerformanceAgreement();
                $performance->file_path = $filePath;
                $performance->year = $request->get('year');
                $performance->period = $request->get('period');
                $performance->save();
                return redirect('/admin/management');
            } else {
                return redirect()->back()->withErrors(['error_message' => 'ไฟล์อัพโหลดมีปัญหากรุณาลองใหม่อีกครั้ง']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $period (period time)
     * @return \Illuminate\Http\Response
     */
    public function show($period, $year)
    {
        $period = TrackPerformanceAgreement::where('year', '=', $year, 'AND', 'period', '=',$period )->orderBy('created_at', 'desc')->first();
        if($period == null) {

        } else {
            return view('', ['period' => $period]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
