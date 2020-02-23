<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Illuminate\Http\Request;

class Dictionaryresult extends Controller
{
    public function index(Request $request)
    {
        $dialect = $request->input('dialect');
        $word = $request->input('to_translate');

        

        if($dialect == 'all') {
            // Dictionary::where('word', $to_translate)->get();
            $translated = Dictionary::where([
                ['word', 'like' , $word],
            ])->get();



        }
        else {
            $translated = Dictionary::where([
                ['dialect', $dialect],
                ['word', $word],
            ])->get();

            if(count('$translated') > 0){
                $translated = "NO Dialect Found or word is not yet transslated";
            }
        }

        return view('welcome',compact('translated'));

        
        
    }
}
