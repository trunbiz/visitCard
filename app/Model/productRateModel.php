<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class productRateModel extends Model
{
    //

    protected $table= 'product_rate';
    protected $fillable = [
        'product_id',
        'user_id',
        'rate',
    ];

    public function getRateProduct($productId)
    {
        $data = productRateModel::where('product_id', $productId)->avg('rate');
        return $data;
    }
}
