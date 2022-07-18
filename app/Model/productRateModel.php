<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class productRateModel extends Model
{
    //

    protected $table= 'product_rate';

    public function getRateProduct($productId)
    {
        $data = productRateModel::where('product_id', $productId)->avg('rate');
        return $data;
    }
}
