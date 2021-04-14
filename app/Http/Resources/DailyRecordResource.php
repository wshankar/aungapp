<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DailyRecordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            // 'dmNumber' => $this->user->profile->dmNumber,
            // 'username' => $this->user->name,
            'record_id' => $this->id,
            'fbs' => $this->fbs,
            'breakfast' => $this->breakfast,
            'nuts' => $this->nuts,
            'lunch' => $this->lunch,
            'rbs' => $this->rbs,
            'fruits' => $this->fruits,
            'dinner' => $this->dinner,
            'rec_notes' => $this->rec_notes,
            'bodyWeight' => $this->bodyWeight,
            'bloodPressure' => $this->bloodPressure,
            'heartRate' => $this->heartRate,
            'recordComment' => $this->record_comment->recordComment
        ];
    }
}