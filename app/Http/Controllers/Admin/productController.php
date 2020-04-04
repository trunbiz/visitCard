<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\categoryModel;
use App\Model\productModel;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    private $product, $category;
    public function __construct()
    {
        $this->category= new categoryModel();
        $this->product= new productModel();
    }
    public function listAll()
    {
        return view('admin.product');
    }
    public function addShow()
    {
        $data['listCate']=$this->category->listAll();
        return view('admin.editProduct',$data);
    }
    public function addItem(Request $request)
    {
        $this->product->addItem($request);
        return redirect()->intended('admin/product');
    }

}
