<?php

namespace App\Http\Controllers;

use App\Model\RiskProgress;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RiskprogressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riskProgresses = RiskProgress::all();
        $years = array();
        foreach($riskProgresses as $riskProgress){
            $years[] = $riskProgress->year;
        }

        sort($years);
        $results = array_unique($years);
        $progressList = array();

        foreach($results as $result) {
            $progressList[] = RiskProgress::where('year', '=', $result)->orWhere('month', 'asc')->get();
        }
        return view('risk.riskProgress', ['riskProgresses' => $progressList], ['years' => $results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('risk.addRiskProgress');

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
            'year' => 'required',
            'month' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['file' => 'ไฟล์จะต้องเป็น .pdf เท่านั้น'])->withInput();
        }

        if (Input::file('file')->isValid()) {
            //example of delete exist file
            $existRiskProgress = DB::table('risk_progresses')->where('year', $request->get('year'))
                ->where('month', $request->get('month'))->first();

            if ($existRiskProgress != null) {
                $filename = base_path() . '/public/uploads/Risk-progresses/' . $request->get('year') . '/' . $existRiskProgress->file_path;
                if (File::exists($filename)) {
                    File::delete($filename);
                }
                RiskProgress::destroy($existRiskProgress->id);
            }

            $filePath = $request->get('month') . '.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Risk-progresses/' . $request->get('year'), $filePath)) {
                $riskProgress = new RiskProgress();
                $riskProgress->file_path = $filePath;
                $riskProgress->month = $request->get('month');
                $riskProgress->year = $request->get('year');
                $riskProgress->save();
                return redirect('/admin/management');
            } else {
                return redirect()->back()->withErrors(['error_message' => 'ไฟล์อัพโหลดมีปัญหากรุณาลองใหม่อีกครั้ง']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
