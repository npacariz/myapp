<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Todo extends Model
{
    protected $fillable = ['title', 'is_done', 'priority', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
