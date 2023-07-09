<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myedu extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $primaryKey = 'course_id';
    protected $guarded = [];

}
