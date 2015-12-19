<?php

namespace App\Http\Controllers;

use App\Model\Performance;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pa = Performance::orderBy('year', 'asc')->get();
        return view('pa.pa', ['performances' => $pa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pa.addPerformance');
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
            'file' => 'mimes:pdf'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['file' => 'ไฟล์จะต้องเป็น .pdf เท่านั้น'])->withInput();
        }

        $performanceList = Performance::where('year', '=', $request->get('year'))->get();
        if(sizeof($performanceList) > 0) {
                foreach ($performanceList as $performance) {
                    $filename = base_path() . '/public/uploads/Performances/Performance-' . $request->get('year') . '/' . $performance->file_path;
                    if (File::exists($filename)) {
                        File::delete($filename);
                    }
                    Performance::destroy($performance->id);
                }
        }


        if(Input::file('file')->isValid()){

            $filePath = date('Ymd_His').'.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Performances/Performance-' . $request->get('year'), $filePath)) {
                //example of delete exist file

                $performance = new Performance();
                $performance->file_path = $filePath;
                $performance->year = $request->get('year');
                $performance->save();
                return redirect('admin/management');
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
    public function getPerformanceByYear($year){
        $performance = Performance::where('year', '=', $year)->orderBy('created_at', 'desc')->first();
        if($performance == null) {

        } else {
            return view('', ['performance' => $performance]);
        }
    }
}
