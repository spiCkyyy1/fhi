<?php

namespace App\Http\Controllers;

use App\FinancialHealthSurveyUserAnswers;
use Auth;
class FinancialHealthSurveyController extends Controller
{
    public function index(){
        $questions = new \App\FinancialHealthSurveyQuestions;
        $questions = $questions->with(['userAnswers' => function($query){
            $query->where('user_id', Auth::user()->id);
        }])->get();
        return view('fhs', ['questions' => $questions]);
    }

    public function updateAnswer(){

        $request = request();

        FinancialHealthSurveyUserAnswers::updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'question_id' => $request->question_id
            ],
            [
            'user_id' => Auth::user()->id,
            'question_id' => $request->question_id,
            'answer' => $request->answer
        ]);

        return response()->json(['success' => 'User Answer Saved Successfully.']);
    }
}
