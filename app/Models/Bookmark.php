<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id',
        'note_id'
    ];

    public function note(){
        return $this->belongsTo(Note::class,'note_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
