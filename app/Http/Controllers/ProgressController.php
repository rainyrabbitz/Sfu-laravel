<?php

namespace App\Http\Controllers;

use App\Model\Progress;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progresses = Progress::all();
        $years = array();
        foreach($progresses as $progress){
            $years[] = $progress->year;
        }

        sort($years);
        $results = array_unique($years);
        $progressList = array();

        foreach($results as $result) {
            $progressList[] = Progress::where('year', '=', $result)->orWhere('month', 'asc')->get();
        }

        return view('announce.result', ['progresses' => $progressList], ['years' => $results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announce.addProgress');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
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
            $existProgress = DB::table('progresses')->where('year', $request->get('year'))
                ->where('month', $request->get('month'))->first();

            if ($existProgress != null) {
                $filename = base_path() . '/public/uploads/Progresses/' . $request->get('year') . '/' . $existProgress->file_path;
                if (File::exists($filename)) {
                    File::delete($filename);
                }
                Progress::destroy($existProgress->id);
            }

            $filePath = $request->get('month') . '.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Progresses/' . $request->get('year'), $filePath)) {
                $progress = new Progress();
                $progress->file_path = $filePath;
                $progress->month = $request->get('month');
                $progress->year = $request->get('year');
                $progress->save();
                return redirect('/admin/management');
            } else {
                return redirect()->back()->withErrors(['error_message' => 'ไฟล์อัพโหลดมีปัญหากรุณาลองใหม่อีกครั้ง']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
