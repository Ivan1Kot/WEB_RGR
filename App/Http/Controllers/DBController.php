<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

        redirect('/');
    }

    public function Logout()
    {
        session(['isUser' => 0]);
        redirect('/');
    }

    public function Signin(Request $request)
    {
        session(['isUser' => 0]);
        redirect('/');
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
