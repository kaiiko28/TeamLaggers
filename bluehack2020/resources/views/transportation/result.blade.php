@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Your Destination</h2>
                <h3>Pickup: {{$from}}</h3>
                <h3>Drop off: {{$to}}</h3>
            </div>
            <div class="col-sm-6">
                <h2>Available Vihicles</h2>
                <img src="{{ asset('/') }}img/etrik1.jpg" alt="">
            </div>
        </div>
    </div>
@endsection