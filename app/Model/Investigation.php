<?php

namespace App\Model;

use App\Model\Admin\InvComment;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inv_comment()
    {
        return $this->hasOne(InvComment::class, 'investigation_id');
    }
}
