<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(\App\Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(\App\Questionnaire $questionnaire)
    {
        
        $data = request()->validate([
            'question.question' => 'required',
            'question.number_answer' => 'required',
            'answers.*.answer' => 'required',
        ]);
        
        //dd($data['question']['number_answer']);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionnaires/'.$questionnaire->id);        
    }

    public function destroy(\App\Questionnaire $questionnaire, \App\Question $question)
    {
      $question->answers()->delete();
      $question->delete();

      return redirect($questionnaire->path());  
      
    }
}
