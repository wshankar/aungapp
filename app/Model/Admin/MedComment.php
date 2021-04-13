<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class MedComment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
