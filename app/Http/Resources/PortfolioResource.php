<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'banner' => $this->banner,
            'product_photos' => $this->product_photos,
            'a_contents' => $this->a_contents,
            'a_content_longs' => $this->a_content_longs,
            'brand_story_longs' => $this->brand_story_longs,
            'brand_stories' => $this->brand_stories,
            'videos' => $this->videos,
            'social_post_designs' => $this->social_post_designs,
            'packging_designs' => $this->packging_designs,
            'created_at' => $this->created_at
        ];
    }
}
