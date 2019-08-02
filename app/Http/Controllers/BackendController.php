<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Session;
use Excel;
use Samples;
use App\Imports\ImportUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Backend.quations');
    }
    
    public function activeTest(){
        $activation = \App\Activation::orderBy('id','desc')->first();
        return view('Backend.test_activation',['activation'=>$activation]);
    }
    
    public function saveActiveTest(Request $request){
        $requestData = $request->all();
        \App\Activation::create($requestData);
        Session::flash('alert-success', 'Updated Successfully.');
        return redirect('activation_link');
//        echo "<pre>";print_r($requestData);exit;
    }

    public function studList(){
        $stud_list = \App\User::where(['role'=>2])->get();
//        echo "<pre>";print_r($stud_list);exit;
        return view('Backend.stud_list',['stud_list'=>$stud_list]);
    }
    
    public function editStud(){
        $id = $_GET['id'];
        $stud_data = \App\User::where(['id'=>$id])->first();
        return view('auth.edit_stud',['stud_data'=>$stud_data]);
    }
    
    public function getNote(){
        $note = \App\Note::orderBy('id','desc')->first();
        return view('Backend.note',['note'=>$note]);
    }

    public function saveNote(Request $request){
        $requestData = $request->all();
        \App\Note::create($requestData);
        Session::flash('alert-success', 'Updated Successfully.');
        return redirect('note');
    }

    public function getprogramNote(){
        $note = \App\ProgramNote::orderBy('id','desc')->first();
        return view('Backend.program_note',['note'=>$note]);
    }

    public function saveprogramNote(Request $request){
        $requestData = $request->all();
        \App\ProgramNote::create($requestData);
        Session::flash('alert-success', 'Updated Successfully.');
        return redirect('program-note');
    }
    
    public function updateStud(Request $request,$id){
        $requestData = $request->except('password');
        if ($request->password)
            $requestData['password'] = bcrypt($request->password);
        $users = \App\User::findorfail($id);
        $users->update($requestData);
        Session::flash('alert-success', 'Updated Successfully.');
        return redirect('stud_list');
    }
    
    public function marksDetail(){
        $answer = DB::table('tbl_answer')
            ->select('tbl_answer.score','tbl_answer.stud_id','users.name','users.email','users.mobile_no','users.collage_name')
            ->leftjoin('users','users.id','=','tbl_answer.stud_id')
            ->distinct()
            ->get();
        return view('Backend.stud_reprort',['answer'=>$answer]);
    }
    
    public function reprotDetail(Request $request){
        $requestData = $request->all();
//        echo "<pre>";print_r($requestData);exit;
        $new_form_date = $new_to_date = "";
        $form_date = $requestData['from_date'];
        if(!empty($requestData['to_date']))
        {
            $to_date = $requestData['to_date']; 
        }
        else{
            $to_date = $requestData['from_date'];  
        }
        $date1 = strtr($form_date, '/', '-');
        $new_form_date = date("Y-m-d", strtotime($date1));
        $date2 = strtr($to_date,'/','-');
        $new_to_date = date("Y-m-d", strtotime($date2));
        $answer = DB::table('tbl_answer')
            ->select('tbl_answer.score','tbl_answer.stud_id','tbl_answer.date','users.name','users.email','users.mobile_no','users.collage_name')
            ->leftjoin('users','users.id','=','tbl_answer.stud_id')
            ->whereBetween('tbl_answer.date', array($new_form_date, $new_to_date))
            ->distinct()
            ->get();
//        echo "<pre>";print_r($answer);exit;
        return view('Backend.student',['answer'=>$answer]);
    }

    public function saveUpload(Request $request){
        $requestData = $request->all();
        $this->validate($request, array(
            'sample_file'      => 'required'
        ));
        if($request->hasFile('sample_file')){
            $extension = File::extension($request->sample_file->getClientOriginalName());
                if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
                    $array = Excel::toArray(new ImportUsers, $request->file('sample_file'));
                }
//                echo "<pre>";print_r($array);exit;
                $i = 0;
                date_default_timezone_set('Asia/Kolkata');
                $arr= array();
                if(count($array)>0){
//                    In Built Format
                    foreach ($array[0] as $key => $value) {
                        if($i > 0 && !empty($value[0])){
//                            if(!in_array($value[1], $arr)){
//                                $arr[] = $value[1];
                                $insert[] = [
                                'question' => $value[0],
                                'option1' => $value[1],
                                'option2' => $value[2],
                                'option3' => $value[3],
                                'option4' => $value[4],
                                'answer' => $value[5],
                                'marks' => $value[6],
                                ];
//                            }
                        }
                        $i++;
                    }
//                    echo "<pre>";print_r($insert);exit;
                    if(!empty($insert)){
                        $insertData = \App\Question::insert($insert);
                        if ($insertData) {
                            Session::flash('alert-success','Created Successfully.');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
        }
        Session::flash('alert-success', 'Updated Successfully.');
        return redirect('uplaod_quations');
//        echo "<pre>";print_r($requestData);exit;
    }
    
    public function saveimgUpload(Request $request){
        $requestData = $request->all();
       
        if(!empty($requestData['problem_fig'])) {
            $design = $requestData['problem_fig'];
            $filename = rand(0,999).$design->getClientOriginalName();
            $destination= "problem_fig";
            $design->move($destination,$filename);
            $requestData['problem_fig'] = $filename;
        }
        
        if(!empty($requestData['answer_fig'])) {
            $design = $requestData['answer_fig'];
            $filename = rand(0,999).$design->getClientOriginalName();
            $destination= "answer_fig";
            $design->move($destination,$filename);
            $requestData['answer_fig'] = $filename;
        }
        
//        echo "<pre>";print_r($requestData);exit;
        \App\Question::create($requestData);
        Session::flash('alert-success', 'Updated Successfully.');
        return redirect('uplaod_quations');
//        echo "<pre>";print_r($requestData);exit;
    }
    
    //Programing Quetions
    public function getPquetions(){
        return view('Backend.programing_quetions');
    }
    
    public function savePquetions(Request $request){
        $requestData = $request->all();
//        echo "<pre>";print_r($requestData);exit;
        \App\Programing::create($requestData);
        Session::flash('alert-success', 'Saved Successfully.');
        return redirect('progaming_quetions');
    }
}
