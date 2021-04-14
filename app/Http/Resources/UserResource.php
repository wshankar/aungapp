<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'user_id' => $this->id,
            'dmNumber' => $this->dmNumber,
            'username' => $this->name,
            'diabetesAge' => $this->diabetesAge,
            'favFood' => $this->favFood,
            'phoneNumber' => $this->phoneNumber,
            'address' => $this->address,
            'profile_pic' => $this->profile_pic,
            // 'subscription' => $this->user->subscriptions->subscription_type
        ];
    }
}
