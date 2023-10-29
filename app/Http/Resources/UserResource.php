<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify'=> $this->id,
            'name'=> $this->name,
            'email'=> $this->email,
            'created_at'=> Carbon::make($this->created_at)->format('Y-m-d'),
        ];
    }
}
