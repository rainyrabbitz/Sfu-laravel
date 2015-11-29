<?php

namespace App\Http\Controllers;

use App\Model\Responsibility;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class ResponsibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsibility.addResponsibility');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check input (accept .pdf only)
        $validator = Validator::make($request->all(), [
            'file' => 'mimes:pdf'
        ]);

        //if file is not pdf redirect back with error
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['file' => 'ไฟล์จะต้องเป็น .pdf เท่านั้น'])->withInput();
        }

        if(Input::file('file')->isValid()){

            $filePath = 'responsibility.pdf';

            $responsibilityList = Responsibility::all();
            if(sizeof($responsibilityList)!=0){
                $lastResponsibility = $responsibilityList[sizeof($responsibilityList)-1];
                //get file path from database(the last one from database but actually in database always has only one command)
                $filename = base_path() . '/public/uploads/Responsibility/'.$lastResponsibility->file_path;
                //check has file or not is has then delete file in uploads/Command folder
                if (File::exists($filename)) {
                    File::delete($filename);
                }
                //delete all command from database(actually it always has one in database)
                foreach($responsibilityList as $responsibility) {
                    Responsibility::destroy($responsibility->id);
                }
            }

            //move file to destination and set file name
            if (Input::file('file')->move(base_path() . '/public/uploads/Responsibility', $filePath)) {
                //example of delete exist file


                //add new command path to database
                $responsibility = new Responsibility();
                $responsibility->file_path = $filePath;
                $responsibility->save();
                return redirect('/responsibility/add');
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
