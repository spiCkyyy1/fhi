<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialHealthSurveyUserAnswers extends Model
{
    protected $fillable = ['user_id', 'question_id', 'answer'];

    public function question(){
        return $this->belongsTo(\FinancialHealthSurveyQuestions::class, 'question_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
