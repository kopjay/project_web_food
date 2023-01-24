<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
       'food_id',
       'user_id',
    ];
    use HasFactory;
    public function food(){
        return $this->belongsTo(Food::class,'food_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
