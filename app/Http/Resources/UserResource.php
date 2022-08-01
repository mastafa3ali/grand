<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed email
 * @property mixed phone
 * @property mixed avatar
 * @property mixed type
 * @property mixed position
 * @property mixed active
 * @property mixed roles
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {



        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email
        ];
        
    }
}
