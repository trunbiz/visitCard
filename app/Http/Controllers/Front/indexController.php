<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\productModel;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    private $product;
    public function __construct()
    {
        $this->product= new productModel();
    }
    public function indexShow()
    {
        $data['items1']=$this->product->searchCategoryProduct('SẢN PHẨM BÁN CHẠY');
        $data['items2']=$this->product->searchCategoryProduct('HÀNG MỚI');
        $data['items3']=$this->product->searchCategoryProduct('PHONG CÁCH');
        $data['items4']=$this->product->searchCategoryProduct('SẢN PHẨM');
        $data['items5']=$this->product->searchCategoryProduct('DÀNH RIÊNG CHO BẠN');
        return view('front.index',$data);
    }
    public function searchItem($search)
    {
        $search= str_replace(' ', '%', $search);
        $data['items']=$this->product->searchItem($search);
        return $data['items'];
    }

}
