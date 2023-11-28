<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DefaultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return \Illuminate\Support\Collection
     */
    public function toArray(Request $request)
    {
        return collect($this->resource);
    }
}
