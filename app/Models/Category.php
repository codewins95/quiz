<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $filable = [
        'name','slug','position_order','parent_id','icon','status','show_home'
    ];
}
