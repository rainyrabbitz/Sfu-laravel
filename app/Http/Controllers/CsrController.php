<?php

namespace App\Http\Controllers;

use App\Model\CsrActivity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riskProgresses = CsrActivity::all();
        $years = array();
        foreach($riskProgresses as $riskProgress){
            $years[] = $riskProgress->year;
        }

        sort($years);
        $results = array_unique($years);

        $progressList = CsrActivity::orderBy('year', 'asc')->orderBy('month', 'asc')->get();
        return view('csr.csr_activity', ['csrActivities' => $progressList], ['years' => $results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('csr.addCsrActivity');
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
            $existCsrActivity = DB::table('csr_activities')->where('year', $request->get('year'))
                ->where('month', $request->get('month'))->first();

            if ($existCsrActivity != null) {
                $filename = base_path() . '/public/uploads/Csr-activities/' . $request->get('year') . '/' . $existCsrActivity->file_path;
                if (File::exists($filename)) {
                    File::delete($filename);
                }
                CsrActivity::destroy($existCsrActivity->id);
            }

            $filePath = $request->get('month') . '.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Csr-activities/' . $request->get('year'), $filePath)) {
                $csrActivity = new CsrActivity();
                $csrActivity->file_path = $filePath;
                $csrActivity->month = $request->get('month');
                $csrActivity->year = $request->get('year');
                $csrActivity->save();
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
