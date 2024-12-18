<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    use HasFactory;
    protected $fillable = [
        'note_id',
        'user_id',
        'image',
        'message',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function note() {
        return $this->belongsTo(Note::class, 'note_id');
    }
  
}
