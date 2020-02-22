@extends('layouts.app')

@section('content')
<div class="booking" style="background:url('{{ asset('img/bg/morefun.jpg') }}');background-size:cover;height:100vh;padding:10% 0">
  <div class="justify-content-md-center row  ">
    <div class="card col-sm-5" style="background:#ffffffad">
      <form class="text-center p-5" method="post" action="{{ route('transportation.result')}}">
      
        @csrf
        <p class="h4 mb-4">Book Your Location</p>
      
        <!-- Email -->
        <input type="text" id="from" class="form-control mb-4" id="from" name="from" placeholder="From">
      
        <!-- Password -->
        <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" name="to" placeholder="To">
      
      
        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">SEARCH</button>
      
      </form>
    </div>
  </div>
</div>
@endsection