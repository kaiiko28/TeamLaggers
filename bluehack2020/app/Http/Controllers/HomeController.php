<?php

namespace App\Http\Controllers;

use App\BookTravel;
use App\Transportation;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 'tourist') {
            $booking = BookTravel::where('user_id', Auth::user()->id)->get();
            return view('dashboard.tourist.dashboard',compact('booking'));
        }
        else {
            $booking = BookTravel::where('owner_vehicle_id', Auth::user()->id)->where('status', '!=', "declined" )->orderby('status', 'desc')->get();
            // return $booking;
            return view('dashboard.transporter.dashboard',compact('booking'));
        }
        
    }
}
