<?php

namespace Modules\PreviousPaper\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PreviousPaper\Database\factories\PreviousPaperFactory;

class PreviousPaper extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): PreviousPaperFactory
    {
        //return PreviousPaperFactory::new();
    }
}
