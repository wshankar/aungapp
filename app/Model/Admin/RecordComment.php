<?php

namespace App\Model\Admin;

use App\Model\DailyRecord;
use Illuminate\Database\Eloquent\Model;

class RecordComment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function record()
    {
        return $this->belongsTo(DailyRecord::class);
    }
}
