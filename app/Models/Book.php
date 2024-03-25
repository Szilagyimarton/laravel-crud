<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','author','year','description','user_id'];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%');
        }

    }
//Create realtionship with user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
