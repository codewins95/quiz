<?php

namespace Modules\Quiz\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Quiz\Database\factories\QuestionLevelFactory;

class QuestionLevel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    // protected static function newFactory(): QuestionLevelFactory
    // {
    //     //return QuestionLevelFactory::new();
    // }
}
