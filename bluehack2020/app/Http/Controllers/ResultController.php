<?php

namespace App\Http\Controllers;

use App\BookTravel;
use App\Transportation;
use Auth;
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

    public function book(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required',
            'time' => 'required',
            'vehicle' => 'required',
        ]);
        
        $vehicledata = Transportation::where('id', $request->input('vehicle'))->first();

        $book = new BookTravel;

        $book->user_id = Auth::user()->id;
        $book->user_firstname = Auth::user()->firstname;
        $book->user_lastname = Auth::user()->lastname;
        $book->vehicle_id = $request->input('vehicle');
        $book->vehicle_owner_firstname = $vehicledata->owner_firstname;
        $book->vehicle_owner_lastname = $vehicledata->owner_lastname;
        $book->owner_vehicle_id = $vehicledata->owner_id;
        $book->from = $request->input('from');
        $book->to = $request->input('to');
        $book->date = $request->input('date');
        $book->time = $request->input('time') . $request->input('AMPM');
        $book->request = $request->input('note');

        $book->save();

        return redirect()->route('home');

        // return $request->input('from') . " " . $request->input('to');
    }
    public function updatedata(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required',
            'time' => 'required',
            'vehicle' => 'required'
        ]);
        
        $id = $request->input('id');
        $vehicledata = Transportation::where('id', $request->input('vehicle'))->first();
        
        BookTravel::where('id', $request->input('id'))
          ->update([
              'date' => $request->input('date'),
              'time' => $request->input('time') . $request->input('AMPM'),
              'vehicle_id' => $request->input('vehicle')
              ]);


        return redirect()->route('home');

        // return $request->input('id') . " " . $request->input('from') . " " . $request->input('to');
    }
    public function approved(Request $request) {
        $id = $request->input('id');
        BookTravel::where('id', $id)
          ->update(['status' => 'approve']);
          return redirect()->back()->with('success','data updated');
    }

    public function declined(Request $request) {
        $id = $request->input('id');
        BookTravel::where('id', $id)
          ->update(['status' => 'declined']);
          return redirect()->back()->with('success','data updated');
    }

    public function delete(Request $request) {
        $id = $request->input('id');
        BookTravel::where('id', $id)->delete();
          return redirect()->back()->with('success','data deleted');
    }


    public function edit(Request $request) {

        $id = $request->input('id');
        $bookingdata = BookTravel::where('id', $id)->first();
        $result = Transportation::where('owner_location', 'LIKE', '%'. $bookingdata->from .'%')->orWhere('owner_location', 'LIKE', '%'. $bookingdata->to .'%')->get();

        return view('transportation.edit',compact('bookingdata','result'));
    }


}
