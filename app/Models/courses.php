<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    
    use HasFactory;
    protected $table = 'course';
    protected $primaryKey = 'course_id';
    protected $guarded = [];

    public function cart()
    {
        return $this->hasMany(cart::class);
    }
}
