<?php

namespace Modules\Quiz\App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Quiz\Database\factories\QuestionBankFactory;

class QuestionBank extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'category_id',
        'level_id',
        'papper_id',
        'type',
        'question',
        'upload',
        'explanation',
        'hints',
        'totalOption',
        'create_user_id',
        'trueFalse',
        'active_status'
    ];
    
    protected $with = ['questionGroup', 'questionType'];

    public function questionGroup()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionLevel::class, 'level_id');
    }
}
