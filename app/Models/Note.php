<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;

class Note extends Model
{
    use HasFactory;


    public function favorite() {
        return $this->hasOne(Favorite::class, 'note_id');
    }

    public function getCreatedAtAttribute($value) {
        return date('M d Y h:m a',strtotime($value));
    }
}
