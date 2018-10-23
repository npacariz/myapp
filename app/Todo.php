<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model {
    protected $fillable = ['title', 'is_done', 'priority', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
