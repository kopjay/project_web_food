<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable= [
        'city_id',
        'image',
        'name',
        'description',
        'duration',
        'rating',
    ];
    public function scopeFilter($query, array $fillters){
        if($fillters['search'] ?? false){
            $query->where('name', 'LIKE', '%'. request('search'). '%');
        }
        if($fillters['tag'] ?? false){
            $query->where('city','LIKE', '%'. request('tag'). '%');
        }

    }
    public function cities(){
        return $this->belongsTo(City::class,'city_id','id');
    }
}
