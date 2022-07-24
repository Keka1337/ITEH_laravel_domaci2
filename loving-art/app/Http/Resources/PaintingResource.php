<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaintingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap="paintings";
    public function toArray($request)
    {
        return [
            'artist'=>new ArtistResource($this->resource->artist),
            'art_period'=>new ArtPeriodResource($this->resource->artPeriod),
            'title'=>$this->resource->title,
            'description'=>$this->resource->description,
            'year'=>$this->resource->year
        ];
    }
}
