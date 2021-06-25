<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use App\Models\ModeratorModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function CreateUser(Request $request)
    {
        $valid = $request->validate([
            'user-name' => 'required',
            'user-email' => 'required',
            'user-password' => 'required|min:4',
            'password-confirmation' => 'required|min:4',
        ]);

        $user = new UserModel();

        $user->email = $request->input('user-email');
        $user->FIO = $request->input('user-name');
        $user->password = $request->input('user-password');

        $user->save();

        session(['isUser' => 1]);
        session(['username' => $request->input('user-name')]);
        session(['email' => $request->input('user-email')]);

        session(['isUser' => 1]);
        return view('login');
    }

    public function Logout()
    {
        session(['isUser' => 0]);
        return view('main');
    }

    public function Adminlogout()
    {
        session(['isModer' => 0]);
        session(['isAdmin' => 0]);
        return view('main');
    }

    public function Signin(Request $request)
    {
        $valid = $request->validate([
            'user-email' => 'required',
            'user-password' => 'required|min:4',
        ]);
        $useremail = UserModel::select("*")->where("email", $request->input('user-email'));

        if($useremail->exists() && UserModel::select("*")->where("password", $request->input('user-password'))->exists()){
            session(['isUser' => 1]);
            session(['username' => UserModel::find($request->input('user-email'))->FIO]);
            session(['email' => $request->input('user-email')]);
        }

        return view('signin');
    }

    public function Adminsignin(Request $request)
    {
        $valid = $request->validate([
            'user-nickname' => 'required',
            'user-password' => 'required|min:4',
        ]);

        if ($request->input('type_account') == 0)
        {
            $usernickname = ModeratorModel::select("*")->where("nickname", $request->input('user-nickname'));
            if($usernickname->exists() && ModeratorModel::select("*")->where("password", $request->input('user-password'))->exists()){
                session(['isModer' => 1]);
                session(['nickname' => $request->input('user-nickname')]);
            }
        }
        else
        {
            $usernickname = AdminModel::select("*")->where("nickname", $request->input('user-nickname'));
            if($usernickname->exists() && AdminModel::select("*")->where("password", $request->input('user-password'))->exists()){
                session(['isAdmin' => 1]);
                session(['nickname' => $request->input('user-nickname')]);
            }
        }

        return view('adminsignin');
    }

    public function Adminpanel()
    {
        return view('adminpanel');
    }

    public function CreateModerator(Request $request)
    {
        $valid = $request->validate([
            'nickname' => 'required',
            'password' => 'required|min:4',
        ]);

        $user = new ModeratorModel();

        $user->nickname = $request->input('nickname');
        $user->password = $request->input('password');

        $user->save();
    }

    public function DeleteModerator(Request $request)
    {
        $valid = $request->validate([
            'nickname' => 'required',
        ]);

        $user = new ModeratorModel();

        $user::where('nickname', $request->input('nickname'))->delete();

        $user->save();
    }
}
