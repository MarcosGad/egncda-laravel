<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\usersEam;
use App\docScoure;
use App\User;
use App\comment_eams;
use Illuminate\Support\Facades\Auth;



class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(\App\Questionnaire $questionnaire, $slug)
    {
        $questionnaire->load('questions.answers');
        return view('survey.show', compact('questionnaire'));
    }

    public function store(\App\Questionnaire $questionnaire)
    {
        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'comment' => 'required',
        ]);

        $res  = DB::select('select number_answer from questions where questionnaire_id =' . $questionnaire->id);
        $Canswer = array();
        foreach ($res as $r) {
            array_push($Canswer,$r->number_answer);
        };
        
        $resTwo  = $data['responses'];
        $answer = array();
        foreach ($resTwo as $i => $item) {
            array_push($answer,$resTwo[$i]['answer_id']);
        };
        

        $r = array_map(function($Canswer, $answer) {
        return $Canswer === $answer;
        }, $Canswer, $answer);

        $Ranswer = count(array_filter($r));
        $result = count($Canswer) - $Ranswer;

        $final = count($Canswer) - $result;
        
        $check  = usersEam::select('questionnaire_id')->where('user_id',Auth::id())->where('questionnaire_id','=',$questionnaire->id)->get();

        if(count($check) == 1){
             return redirect()->back()->with('success','This exam has been completed');
        }
        
        $usersEam = usersEam::create([
            "user_id" => Auth::id(),
            "questionnaire_id" => $questionnaire->id
        ]);

        $docScoure = docScoure::create([
            "doctor_id" => Auth::id(),
            "scoure" => $final
        ]);

        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        User::where('id', Auth::id())->update(['scoure' => $scoure]);

        $comment_eams = comment_eams::create([
            "first_name" => Auth::user()->first_name,
            "questionnaire_title" => $questionnaire->title,
            "comment" => $data['comment']
        ]);

        return redirect()->route('massage')->with('success','Thank You <br/>' . $final .'/' . count($Canswer));
    }

    public function massage(){
        return response()->view('massage')
                         ->header("Refresh", "2;url=/medical");
    }

}
