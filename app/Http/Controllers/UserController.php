<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Users;

class UserController extends Controller {

    /**
     * 显示所给定的用户个人数据。
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
    	$user = Users::find($id);
        return view('index',['name'=>$user->name]);
    }

}
