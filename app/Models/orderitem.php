<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['order_id', 'course_id','price'];
    use HasFactory;
}
