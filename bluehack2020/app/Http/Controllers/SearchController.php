<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request) 

   $dropdialect = $request->input('dialect');
    if($dropdialect == 'all'){
        
    }
    elseif($dropdialect == 'bicolano'){

    }
    elseif($dropdialect == 'cebuano'){

    }   
    elseif($dropdialect == 'hiligaynon'){

    }
    else{

    }
   
}
