<?php

namespace App\Http\Controllers;

use App\Model\RiskPlan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class RiskplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riskPlan = RiskPlan::orderBy('year', 'asc')->get();
        return view('risk.riskPlan', ['riskPlans' => $riskPlan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('risk.addRiskPlan');
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
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['file' => 'ไฟล์จะต้องเป็น .pdf เท่านั้น'])->withInput();
        }

        //example of delete exist file
        $existRiskPlan = RiskPlan::where('year','=',$request->get('year'))->first();

        if ($existRiskPlan != null) {
            $filename = base_path() . '/public/uploads/Risk-plan/' . $request->get('year') . '/' . $existRiskPlan->file_path;
            if (File::exists($filename)) {
                File::delete($filename);
            }
            RiskPlan::destroy($existRiskPlan->id);
        }

        if (Input::file('file')->isValid()) {

            $filePath = $request->get('year') . '.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Risk-plan/', $filePath)) {
                $riskPlan = new RiskPlan();
                $riskPlan->file_path = $filePath;
                $riskPlan->year = $request->get('year');
                $riskPlan->save();
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
