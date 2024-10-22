<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'visibility',
        'user_id',
        'cover'
    ];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function noteBodys(){
        
        return $this->hasMany(Body::class,'note_id');
    }
}
