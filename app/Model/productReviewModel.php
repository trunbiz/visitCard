<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class productReviewModel extends Model
{
    //
    protected $table = 'product_review';
    protected $fillable = [
        'product_id',
        'user_id',
        'review',
    ];

    public function getReviewProduct($product_id)
    {
        return productReviewModel::where('product_id', $product_id)->get();
    }

    public function getUserReview()
    {
        return $this->hasOne(usersModel::class, 'id', 'user_id');
    }

    public function insertData($parmas)
    {
        return productReviewModel::create([
            'product_id' => $parmas['product_id'] ?? null,
            'user_id' => $parmas['user_id'] ?? null,
            'review' => $parmas['review'] ?? null,
        ]);
    }
}
