<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function Reviews()
    {
        $data = 0;
        return view('reviews', $data);
    }
}
