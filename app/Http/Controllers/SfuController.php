<?php

namespace App\Http\Controllers;

use App\Model\SfuMeetingReport;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
class SfuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('report.sfuReport');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.addSfuMeetingReport');
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

        if(Input::file('file')->isValid()){

            $filePath = $request->get('no').'.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/SfuMeetingReport-' . $request->get('year'), $filePath)) {

                //example of delete exist file
                //get all file to delete
                $reportList = SfuMeetingReport::where('year','=',$request->get('year'))->where('no','=',$request->get('no'))->get();
                if(sizeof($reportList)!=0){
                    foreach($reportList as $report) {
                        $filename = base_path() . '/public/uploads/SfuMeetingReport-' . $request->get('year') . '/' . $report->file_path;
                        //delete upload file
                        if (File::exists($filename)) {
                            File::delete($filename);
                        }
                        SfuMeetingReport::destroy($report->id);
                    }
                }
                //add new file path in to databnase
                $meetingReport = new SfuMeetingReport();
                $meetingReport->year = $request->get('year');
                $meetingReport->file_name = $request->get('name');
                $meetingReport->no = $request->get('no');
                $meetingReport->file_path = $filePath;
                $meetingReport->save();

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
