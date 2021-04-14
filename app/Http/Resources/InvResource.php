<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvResource extends JsonResource
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
            'inv_id' => $this->id,
            'testDate' => $this->testDate,
            'Cpeptide' => $this->Cpeptide,
            'hba1c' => $this->hba1c,
            'cholesterol' => $this->cholesterol,
            'hdl' => $this->hdl,
            'ldl' => $this->ldl,
            'tg' => $this->tg,
            'ratio' => $this->ratio,
            'cr' => $this->cr,
            'tsh' => $this->tsh,
            'uric_acid' => $this->uric_acid,
            'inv_notes' => $this->inv_notes,
            'nextText' => $this->nextTest,
            'invComment' => $this->inv_comment->invComment

        ];
    }
}

