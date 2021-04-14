<?php

namespace App\Model;

use App\Model\Admin\RecordComment;
use Illuminate\Database\Eloquent\Model;

class DailyRecord extends Model
{
    protected $fillable = ['user_id', 'fbs'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function record_comment()
    {
        return $this->hasOne(RecordComment::class, 'record_id');
    }
}
