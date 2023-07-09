<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = ['course_name', 'course_description','price'];

    public function course()
{
    return $this->belongsTo(courses::class);
}
}
