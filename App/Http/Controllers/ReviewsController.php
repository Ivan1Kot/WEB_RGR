<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReviewModel;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function Reviews()
    {
        //ReviewModel::find(1)->user['FIO'];
        //ReviewModel::find(1)->all();
        $data = [];
        if (ReviewModel::count() == 0)
        {
            return view('reviews', ["empty" => 1]);
        }
        $datas = ReviewModel::findOrFail(1)->all();
        foreach ($datas as $d)
        {
            $data[$d['id']] = [
                'fio' => ReviewModel::find($d['id'])->user['FIO'],
                'text' => $d['review_text'],
                'timestamp' => $d['timestamp'],
            ];
        }
        return view('reviews', ["data" => $data]);
    }

    public function AddReview(Request $request)
    {
        $valid = $request->validate([
            'reviewtext' => 'required',
        ]);

        $user = new ReviewModel();

        $user->user_email = session('email');
        $user->review_text = $request->input('reviewtext');
        $user->timestamp = date('d.m.Y \в H:i');

        $user->save();

        $data = [];
        $datas = ReviewModel::find(1)->all();
        foreach ($datas as $d)
        {
            $data[$d['id']] = [
                'fio' => ReviewModel::find($d['id'])->user['FIO'],
                'text' => $d['review_text'],
                'timestamp' => $d['timestamp'],
            ];
        }

        return view('reviews', ["data" => $data]);
    }

}
