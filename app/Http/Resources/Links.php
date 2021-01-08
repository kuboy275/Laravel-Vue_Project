<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Links extends JsonResource
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
            'id' => $this->id,
            'config_key' => $this->config_key,
            'config_value' => $this->config_value,
            'type' => $this->type
        ];
    }
}
