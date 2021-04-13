<?php

namespace App\Model;

use App\Model\Admin\MedComment;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function med_comment()
    {
        return $this->hasOne(MedComment::class, 'medication_id');
    }
}
