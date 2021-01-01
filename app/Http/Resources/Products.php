<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Products extends JsonResource
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
            'id'=> $this->id,
            'name'=>$this->name,
            'price'=>$this->price,
            'content'=>$this->content,
            'feature_img_path'=>$this->feature_img_path,
            'feature_img_name'=>$this->feature_img_name,
            'category_id'=>$this->category_id
        ];
    }
}
