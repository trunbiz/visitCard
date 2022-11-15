<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\blogModel;
use App\Model\mediaModel;
use App\Model\productModel;
use App\Model\productRateModel;
use App\Model\productReviewModel;
use App\Model\usersModel;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    private $product,$media,$blog;
    private $productReviewModel;
    private $productRateModel;
    public function __construct()
    {
        $this->product= new productModel();
        $this->media= new mediaModel();
        $this->blog= new blogModel();
        $this->productReviewModel = new productReviewModel();
        $this->productRateModel = new productRateModel();
    }
    public function indexShow()
    {
        $data['items1']=$this->product->searchCategoryProduct('Thẻ in tên');
        $data['items2']=$this->product->searchCategoryProduct('Popon');
        $data['items3']=$this->product->searchCategoryProduct('Phụ kiện');
        $data['items4']=$this->product->searchCategoryProduct('SẢN PHẨM');
        $data['items5']=$this->product->searchCategoryProduct('Thẻ in tên');
        $data['itemsBlog']=$this->blog->listAll();
        return view('front.index',$data);
    }
    public function searchItem($search)
    {
        $search= str_replace(' ', '%', $search);
        $data['items']=$this->product->searchItem($search);
        return view('front.sanpham',$data);
    }
    public function getsearch(Request $request)
    {
        $key= str_replace(' ', '%', $request->search);
        $data['items']=$this->product->searchItem($key);
        return view('front.sanpham',$data);
    }

    public function productDetail($id)
    {
        $data['item'] = $this->product->showItem($id);
        $data['itemsMedia'] = $this->media->listMedia($id);
        $data['reviews'] = $this->productReviewModel->getReviewProduct($id);
        $data['rate'] = (int)$this->productRateModel->getRateProduct($id);
        return view('front.productDetail', $data);
    }
    public function listProduct($id)
    {
        $data['items']=$this->product->listProductCate($id);
        return view('front.sanpham',$data);
    }
    public function blog($id)
    {
        $data['item']= $this->blog->showItem($id);
        return view('front.blogDetail',$data);
    }
    public function product()
    {
        $data['items']=$this->product->product();
        return view('front.sanpham',$data);
    }
    public function searchPrice(Request $request)
    {
        $data['items']=$this->product->searchPrice($request->min,$request->max);
        return view('front.sanpham',$data);
    }

    public function productReview(Request $request)
    {
        $request = $request->all();
        $data = $this->productReviewModel->insertData($request);
        return back();
    }

    public function qrUser($id)
    {
        $data['item'] = usersModel::find($id);
        return view('front.qrUser', $data);
    }

}
