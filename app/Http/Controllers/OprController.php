<?php

namespace App\Http\Controllers;

use App\Model\OprReport;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class OprController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = OprReport::orderBy('year', 'asc')->lists('year');
        $results = array();
        foreach($years as $year){
            $results[] = $year;
        }
        $data = array_unique($results);
        $tracks = OprReport::all();

        return view('report.oprReport', ['years' => $data], ['oprReports' => $tracks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.addOprReport');
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

        $existOprReports = OprReport::where('year', '=', $request->get('year'))->where('period', '=', $request->get('period'))->get();
        if(sizeof($existOprReports) > 0) {
            foreach ($existOprReports as $existOprReport) {
                $filename = base_path() . '/public/uploads/Opr-reports/' . $request->get('year') . '/'.$request->get('period'). '/' . $existOprReport->file_path;
                if (File::exists($filename)) {
                    File::delete($filename);
                }
                OprReport::destroy($existOprReport->id);
            }
        }


        if(Input::file('file')->isValid()){

            $filePath = date('Ymd_His').'.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Opr-reports/' . $request->get('year').'/'.$request->get('period'), $filePath)) {
                //example of delete exist file

                $oprReport = new OprReport();
                $oprReport->file_path = $filePath;
                $oprReport->year = $request->get('year');
                $oprReport->period = $request->get('period');
                $oprReport->save();
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
