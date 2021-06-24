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
            'email' => 'required|email|unique',
            'password' => 'required|min:4',
        ]);

        $user = new UserModel();

        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();
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
