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
class AddResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'type' => $this->type,
            'tags' =>  TagResource::collection($this->tags),
            'category' => $this->category,
            'user' => new UserResource($this->user()->first()),

        ];
    }
}
