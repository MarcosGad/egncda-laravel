<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usersEam;
use Illuminate\Support\Facades\Auth;
use DB;

class QuestionnaireController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionnaire.create')
        ->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'))
        ->with('cats', DB::select('select * from cat'))
        ->with('basicmanagements', DB::select('select * from basic_managements'));
    }
    
    public function store()
    {
       $data = request()->validate([
           'title'   => 'required',
           'purpose' => 'required',
           'cat_id'  => 'required',
           'categoriesofdoctors_id'  => 'required',
           'cvscurriculums_id' => 'required'
       ]);

       $questionnaire = auth()->user()->questionnaires()->create($data);
       return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function show(\App\Questionnaire $questionnaire)
    {
       
        $case = usersEam::all()->where('user_id','=',Auth::id())->where('questionnaire_id','=',$questionnaire->id);
        $caseC = count($case);
        if($caseC == 1){
            return redirect()->back()->with('success','This exam has been completed');
        }elseif($caseC == 0){
            $questionnaire->load('questions.answers');
            return view('questionnaire.show', compact('questionnaire'));        }
    }

}
