<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'product_photos',  'description', 'banner', 'slug', 'a_contents', 'a_content_longs', 'brand_stories', 'brand_story_longs', 'videos', 'social_post_designs', 'packging_designs'];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->diffForHumans()
        );
    }

    public function getProductPhotosAttribute($value)
    {
        return json_decode($value);
    }

    public function getAContentsAttribute($value)
    {
        return json_decode($value);
    }

    public function getVideosAttribute($value)
    {
        return json_decode($value);
    }

    public function getSocialPostDesignsAttribute($value)
    {
        return json_decode($value);
    }

    public function getPackgingDesignsAttribute($value)
    {
        return json_decode($value);
    }
    public function getAContentLongsAttribute($value)
    {
        return json_decode($value);
    }
    public function getBrandStoriesAttribute($value)
    {
        return json_decode($value);
    }
    public function getBrandStoryLongsAttribute($value)
    {
        return json_decode($value);
    }
         
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
