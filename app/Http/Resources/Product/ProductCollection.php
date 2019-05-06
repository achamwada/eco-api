<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
            'total_price' => round((1 - $this->discount/100) * $this->price, 2),
            'link' => [
                'href' => route('products.show', $this->id)
                ]
            ];

    }
}
