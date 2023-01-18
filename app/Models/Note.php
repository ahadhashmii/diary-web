<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value) {
        return date('M d Y h:m a',strtotime($value));
    }
}
