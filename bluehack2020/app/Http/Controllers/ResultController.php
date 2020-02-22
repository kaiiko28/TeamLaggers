<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        return view('transportation.result', compact('from', 'to'));
    }
}
