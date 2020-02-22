<?php

namespace App\Http\Controllers;

use App\Transportation;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required'
        ]);

        $from = $request->input('from');
        $to = $request->input('to');

        $result = Transportation::where('owner_location', 'LIKE', '%'.$from.'%')->orWhere('owner_location', 'LIKE', '%'.$to.'%')->get();


        return view('transportation.result', compact('from', 'to', 'result'));
    }
}
