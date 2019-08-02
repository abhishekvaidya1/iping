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

class FrontendController extends Controller
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
        return view('Frontend.appti_question');
    }
    
    public function getWelcome(){
        return view('Frontend.welcome');
    }
    
    public function getLast(){
        return view('Frontend.thank_you');
    }

    public function testSubmit(Request $request){
        $requestData = $request->all();
//        echo "<pre>";print_r($requestData);exit;
        $user_id = Auth::user()->id;
        if(\App\Answer::where('stud_id', $user_id)->exists()){
            
        }else{
                $score = 0;
                $requestData['stud_id'] = $user_id;
                $requestData['date'] = date("Y-m-d");
                if(isset($requestData['qts'])){
                    $requestData['stud_ans'] = json_encode($requestData['qts']);
                }
                $last_inserted = \App\Answer::create($requestData);
                if(isset($requestData['qts'])){
                    foreach($requestData['qts'] as $key=>$val){
                            $questions = \App\Question::select('id','answer','marks')->where(['id'=>$key,'flag'=>0])->first();
            //                echo "<pre>";print_r($questions);//exit;
                            if($val == $questions->answer){
                                $score = $score + $questions->marks;
                            }
                    }
                }
            $id = $last_inserted->id;
            \App\Answer::where('id','=',$id)->update(['score'=>$score]);
        }
        return redirect('thank_you');
    }
    
    public function getQuestions(){
        return view('Frontend.program_question');
    }
 
}
