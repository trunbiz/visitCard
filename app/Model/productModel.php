<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class productModel extends Model
{
    //
    protected $table='product';
    protected $cate_product;
    public function __construct()
    {
        $this->cate_product= new cate_productModel();
    }
    public function listAll()
    {
        $item=productModel::orderBy('created_at','DESC')->get();
        return $item;
    }
    public function addItem(Request $request)
    {
        try{
            $item= new productModel();
            $item->title=$request->title;
            $item->price=$request->price;
            $item->sale=$request->sale;
            $item->size=$request->size;
            $item->color=$request->color;
            $item->count=$request->count;
            $item->content=$request->content;
            if($request->hasFile('coverimg'))
            {
                $filename=$request->coverimg->getClientOriginalName();
                $item->coverimg=$filename;
                $request->img->storeAs('media',$filename);
            }
            $item->save();
            $this->cate_product->addItem($item->id,$request->idcategory);
            return true;
        }
        catch (Exception $ex){
            report($ex);
            return false;
        }


    }
    public function showItem($id)
    {
        $item=productModel::find($id);
        return $item;
    }
    public function updateItem(Request $request, $id)
    {
        try{
            $item=productModel::find($id);
            $item->title=$request->title;
            $item->price=$request->price;
            $item->sale=$request->sale;
            $item->size=$request->size;
            $item->color=$request->color;
            $item->count=$request->count;
            $item->content=$request->content;
            $item->coverimg=$request->coverimg;
            if($request->hasFile('coverimg'))
            {
                $filename=$request->coverimg->getClientOriginalName();
                $item->coverimg=$filename;
                $request->img->storeAs('media',$filename);
            }
            $item->save();
            return true;
        }catch (Exception $ex)
        {
            report($ex);
            return false;
        }

    }
    public function deleteItem($id)
    {
        try{
            productModel::destroy($id);
            return true;
        }catch (Exception $ex)
        {
            report ($ex);
            return false;
        }
    }
}
