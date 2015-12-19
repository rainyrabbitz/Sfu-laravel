<?php

namespace App\Http\Controllers;

use App\Model\Announce;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announces = Announce::orderBy('year', 'asc')->get();
        return view('announce.announces', ['announces' => $announces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announce.addAnnounce');
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

            $filePath = date('Ymd_His').'.pdf';
            if (Input::file('file')->move(base_path() . '/public/uploads/Announces/Announce-' . $request->get('year'), $filePath)) {
                //example of delete exist file
                $announceList = Announce::all();
                if(sizeof($announceList)!=0){
                    $lastAnnounce = $announceList[sizeof($announceList)-1];
                    $filename = base_path() . '/public/uploads/Announces/Announce-/'.$request->get('year').'/'.$lastAnnounce->file_path;
                    if (File::exists($filename)) {
                        File::delete($filename);
                    }
//                    $oldAnnounce = Announce::findOrNew($lastAnnounce->id);
                    $lastAnnounce = DB::table('announces')->where('year', $request->get('year'))->first();
//                    dd($lastAnnounce);die;
                    if($lastAnnounce != null) {
                        Announce::destroy($lastAnnounce->id);
                    }
                }

                $announce = new Announce();
                $announce->file_path = $filePath;
                $announce->year = $request->get('year');
                $announce->save();
                return redirect('/announces');
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


    public function getAnnounceByYear($year){
        $announce = Announce::where('year', '=', $year)->orderBy('created_at', 'desc')->first();
        if($announce == null) {

        } else {
            return view('', ['announce' => $announce]);
        }
    }
}
