<?php

namespace Modules\Quiz\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuestionOption extends Model
{
   use HasFactory;

   protected $fillable = [
      'name',
      'questionID',
      'img'
   ];
}
