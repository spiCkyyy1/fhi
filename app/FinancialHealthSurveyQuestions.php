<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialHealthSurveyQuestions extends Model
{
    protected $fillable = ['question'];

    public function userAnswers(){
        return $this->hasOne(FinancialHealthSurveyUserAnswers::class, 'question_id');
    }
}
