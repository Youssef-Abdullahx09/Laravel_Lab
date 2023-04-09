<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user = User::find($this->posted_by);
        // dd($user);
        return [
            "id" => $this->id,
            "Title" => $this->title,
            "Description" => $this->description,
            "User" => new UserResource($user)
        ];
    }
}
