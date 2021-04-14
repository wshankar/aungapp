<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedResource extends JsonResource
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
            'dmNumber' => $this->user->profile->dmNumber,
            'username' => $this->user->name,
            'med_id' => $this->id,
            'med_date' => $this->med_date,
            'noMed' => $this->noMed,
            'med1' => $this->med1,
            'med2' => $this->med2,
            'med3' => $this->med3,
            'med4' => $this->med4,
            'med5' => $this->med5,
            'med6' => $this->med6,
            'med7' => $this->med7,
            'med8' => $this->med8,
            'med9' => $this->med9,
            'med10' => $this->med10,
            'med11' => $this->med11,
            'med12' => $this->med12,
            'med13' => $this->med13,
            'med14' => $this->med14,
            'med15' => $this->med15,
            'medFree' => $this->medFree,
            'med_notes' => $this->med_notes,
            'medComment' => $this->med_comment->medComment
        ];
    }
}
