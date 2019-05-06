<?php

namespace App\Http\Resources\Product;

use App\Model\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->product_name,
            'description' => $this->details,
            'price' => $this->price,
            'stock' => ($this->stock == 0)? 'Out of stock' : $this->stock ,
            'total_price' => round((1 - $this->discount/100) * $this->price, 2),
            'ratings' => ($this->reviews->count() == 0 || $this->reviews->sum('star') == 0) ? 'No rating yet' : $this->reviews->sum('star') / $this->reviews->count(),
            'href' => [
                'link' => Route('reviews.index',$this->id)
            ]
        ];
    }
}
