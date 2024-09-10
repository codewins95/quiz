<?php

namespace Modules\Quiz\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Quiz\Database\factories\QuestionAnswerFactory;

class QuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'questionID',
        'optionID',
        'question_type'
    ];
    
   
}
