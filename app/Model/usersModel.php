<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class usersModel extends Model
{
    //
    protected $table='users';
    protected $fillable = [
        'username',
        'email',
        'phone',
        'city',
        'address',
        'lever',
        'status',
        'img',
        'url_facebook',
        'url_instagram',
        'url_youtube',
        'description',
        'short_description',
        'url_tiktok',
    ];
    public function listAll()
    {
        $item=usersModel::orderBy('created_at','DESC')->get();
        return $item;
    }
    public function addItem(Request $request)
    {
        try{
            $item= new usersModel();
            $item->username=$request->username;
            $item->email=$request->email;
            $item->phone=$request->phone;
            $item->city=$request->city;
            $item->address=$request->address;
            $item->password=bcrypt($request->password);
            $item->lever=isset($request->lever)?$request->lever:1;
            $item->status=$request->status;
            if($request->hasFile('img'))
            {
                $filename=$request->img->getClientOriginalName();
                $item->img=$filename;
                $request->img->move('public/media',$filename);
            }
            $item->save();
            return $item->id;
        }
        catch (Exception $ex){
            report($ex);
            return false;
        }


    }
    public function showItem($id)
    {
        $item=usersModel::find($id);
        return $item;
    }
    public function updateItem(Request $request, $id)
    {
        try{
            $item=usersModel::find($id);
            $item->username=$request->username;
            $item->email=$request->email;
            $item->phone=$request->phone;
            $item->city=$request->city;
            $item->address=$request->address;
            $item->password=bcrypt($request->password);
            $item->lever=isset($request->lever)?1:0;
            $item->status=$request->status;
            if($request->hasFile('img'))
            {
                $filename=$request->img->getClientOriginalName();
                $item->img=$filename;
                $request->img->move('public/media',$filename);
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
            usersModel::destroy($id);
            return true;
        }catch (Exception $ex)
        {
            report ($ex);
            return false;
        }
    }
}
