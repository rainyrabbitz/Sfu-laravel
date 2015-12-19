<?php

namespace App\Http\Controllers;

use App\Model\MeetingReport;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
class MeetingreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = MeetingReport::orderBy('year', 'asc')->lists('year');
        $results = array();
        foreach($years as $year){
            $results[] = $year;
        }
        $data = array_unique($results);

        $meetingReports = MeetingReport::orderBy('year', 'asc')->orderBy('no', 'asc')->get();
        return view('risk.meetingReport',['years' => $data], ['meetingReports' => $meetingReports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('risk.addMeetingReport');
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
        $existMeetingReport = MeetingReport::where('year','=',$request->get('year'))->where('no','=',$request->get('no'))->first();

        if ($existMeetingReport != null) {
            $filename = base_path() . '/public/uploads/Meeting-reports/' . $request->get('year') . '/' . $existMeetingReport->file_path;
            if (File::exists($filename)) {
                File::delete($filename);
            }
            MeetingReport::destroy($existMeetingReport->id);
        }

        if (Input::file('file')->isValid()) {

            $filePath = $request->get('no') . '.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Meeting-reports/'.$request->get('year'), $filePath)) {
                $meetingReport = new MeetingReport();
                $meetingReport->file_path = $filePath;
                $meetingReport->year = $request->get('year');
                $meetingReport->no = $request->get('no');
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
