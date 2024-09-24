<?php

namespace Modules\Student\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Student\Database\factories\StudentFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'studentID',
        'name',
        'email',
        'phone',
        'gender',
        'dob',
        'religion',
        'country',
        'state',
        'address',
        'photo',
        'username',
        'password',
        'role',
        'create_userID',
        'active'
    ];

    // protected static function newFactory(): StudentFactory
    // {
    //     //return StudentFactory::new();
    // }
}
