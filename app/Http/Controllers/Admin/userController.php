<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\usersModel;
use Illuminate\Http\Request;

class userController extends Controller
{
    //

    public function __construct()
    {

    }

    public function listAll(Request $request)
    {
        $data['items'] = usersModel::orderBy('id', 'DESC')->get();
        return view('admin.users', $data);
    }

    public function showStore(Request $request)
    {
        return view('admin.editUser');
    }
    public function storeItem(Request $request)
    {
        $request = $request->all();
        $userInfo = new usersModel();
        $userInfo->username = $request['username'] ?? null;
        $userInfo->email = $request['email'] ?? null;
        $userInfo->phone = $request['phone'] ?? null;
        $userInfo->city = $request['city'] ?? null;
        $userInfo->address = $request['address'] ?? null;
        $userInfo->email = $request['email'] ?? null;
        $userInfo->url_facebook = $request['url_facebook'] ?? null;
        $userInfo->url_instagram = $request['url_instagram'] ?? null;
        $userInfo->url_youtube = $request['url_youtube'] ?? null;
        $userInfo->url_tiktok = $request['url_tiktok'] ?? null;
        $userInfo->short_description = $request['short_description'] ?? null;
        $userInfo->description = $request['description'] ?? null;
        if (!empty($request['password']))
        {
            $userInfo->password = bcrypt($request['password']) ?? null;
        }
        if(!empty($request['img']))
        {
            $filename=$request['img']->getClientOriginalName();
            $userInfo->img=$filename;
            $request['img']->move('public/media',$filename);
        }
        $userInfo->save();
        $data['item'] = $userInfo;
        return redirect()->intended('admin/users');
    }

    public function showItem(Request $request, $id)
    {
        $data['item'] = usersModel::find($id);
        return view('admin.editUser', $data);
    }

    public function updateItem(Request $request, $id)
    {
        $request = $request->all();
        $userInfo = usersModel::find($id);
        $userInfo->username = $request['username'] ?? null;
        $userInfo->email = $request['email'] ?? null;
        $userInfo->phone = $request['phone'] ?? null;
        $userInfo->city = $request['city'] ?? null;
        $userInfo->address = $request['address'] ?? null;
        $userInfo->email = $request['email'] ?? null;
        $userInfo->url_facebook = $request['url_facebook'] ?? null;
        $userInfo->url_instagram = $request['url_instagram'] ?? null;
        $userInfo->url_youtube = $request['url_youtube'] ?? null;
        $userInfo->url_tiktok = $request['url_tiktok'] ?? null;
        $userInfo->short_description = $request['short_description'] ?? null;
        $userInfo->description = $request['description'] ?? null;
        if (!empty($request['password']))
        {
            $userInfo->password = bcrypt($request['password']) ?? null;
        }
        if(!empty($request['img']))
        {
            $filename=$request['img']->getClientOriginalName();
            $userInfo->img=$filename;
            $request['img']->move('public/media',$filename);
        }
        $userInfo->save();
        $data['item'] = $userInfo;
        return redirect()->intended('admin/users');
    }

    public function deleteItem(Request $request, $id)
    {
        $userInfo = usersModel::find($id);
        $userInfo->delete();
        return back();
    }
}
