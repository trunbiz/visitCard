<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class mediaModel extends Model
{
    //
    protected $table='media';
    public function listAll()
    {
        $item=mediaModel::orderBy('created_at','DESC')->get();
        return $item;
    }
    public function addItem(Request $request,$idproduct,$idblog)
    {
            try {
                if($request->hasfile('media'))
                {

                    foreach($request->file('media') as $file)
                    {
                        $item = new mediaModel();
                        $item->idproduct=$idproduct;
                        $item->idblog=$idblog;
                        $filename=$file->getClientOriginalName();
                        $item->url = $filename;
                        //$file->storeAs('media',$filename);
                        $file->move('public/media',$filename);
                        $item->save();
                    }
                }
                return true;
            } catch (Exception $ex) {
                report($ex);
                return false;
            }

    }
    public function deleteItem($id)
    {
        try{
            mediaModel::destroy($id);
            return true;
        }catch (Exception $ex)
        {
            report ($ex);
            return false;
        }
    }
}
