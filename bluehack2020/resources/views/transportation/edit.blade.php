@extends('layouts.app');
@section('style')
    <style>
        // Within style tags in your html file
    * { box-sizing: border-box; }

    .grid:after {
        content: '';
        display: block;
        clear: both;
    }

    .grid-item {
        width: auto;
        height: 200px;
        float: left;
        background: #00997B;
        border: 1px solid #333;
        border-color: hsla(0, 0%, 0%, 0.5);
        border-radius: 5px;
        margin: 5px;
    }
        .boxed label {
        /* display: inline-block;
        width: 100%; */
        padding: 10px;
        border: solid 2px #ccc;
        transition: all 0.3s;
        background: #ddd;
        border-radius: 5px;
        }
        .boxed label:hover {
        
            background: #fff;
        }

        .boxed input[type="radio"] {
        display: none;
        }

        .boxed input[type="radio"]:checked + label {
        border: solid 2px blue;
        background: blue;
        color: #fff;
        }
        .bg {
            background:url('{{ asset('img/bg/morefun.jpg') }}');
            background-size:cover;
            padding:10% 0;
            background-attachment:fixed;
        }
</style>
@endsection

@section('content')
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h2>Your Booking </h2>
                    <h5 class="text-center">Pickup from: <span style="font-weight:800">{{$bookingdata->from}} </span> Drop off to: <span style="font-weight:800">{{$bookingdata->to}} </span></h5>
                        <hr>

                    <h2>Available Vehicles</h2>
                    

                    <form method="post" action="{{ route('book.update')  . '?from=' . $bookingdata->from . '&to=' . $bookingdata->to  }}" class="text-center">
                        @csrf
                        <div class="grid boxed text-center">

                            @if (count($result) > 0)
                                @foreach ($result as $result)
                                    <input type="radio" id="{{$result->id}}" name="vehicle" value="{{$result->id}}" @if ($result->id == $bookingdata->vehicle_id)
                                        checked
                                    @endif>
                                    <label for="{{$result->id}}">
                                        <img class="grid-item" src="{{ asset('/') . $result->owner_vehicle}}" alt="">
                                        <h3>₱ {{$result->vehicle_rent_price}} / hr</h3>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                            <div class="row justify-content-md-center my-5" >
                                
                                <div class="col-sm-3 sm-offset-3">
                                    <input type="text" name="id" readonly id="booking_id" value="{{$bookingdata->id}}" class="d-none">
                                    <input 
                                    name="date" 
                                    id="date" 
                                    class="form-control" 
                                    style="width: 100%; display: inline;" 
                                    onchange="invoicedue(event);" 
                                    required="true"
                                    value="{{ $bookingdata->date }}" 
                                    type="date">
                                 </div>
                                <div class="col-sm-3">
                                <select class="form-control"  name="time" id="">
                                    
                                    <option value="12:00" @if ($bookingdata->time == '12:00') selected @endif>12:00</option>
                                    <option value="1:00" @if ($bookingdata->time == '1:00') selected @endif>1:00</option>
                                    <option value="2:00" @if ($bookingdata->time == '2:00') selected @endif>2:00</option>
                                    <option value="3:00" @if ($bookingdata->time == '3:00') selected @endif>3:00</option>
                                    <option value="4:00" @if ($bookingdata->time == '4:00') selected @endif>4:00</option>
                                    <option value="5:00" @if ($bookingdata->time == '5:00') selected @endif>5:00</option>
                                    <option value="6:00" @if ($bookingdata->time == '6:00') selected @endif>6:00</option>
                                    <option value="7:00" @if ($bookingdata->time == '7:00') selected @endif>7:00</option>
                                    <option value="8:00" @if ($bookingdata->time == '8:00') selected @endif>8:00</option>
                                    <option value="9:00" @if ($bookingdata->time == '9:00') selected @endif>9:00</option>
                                    <option value="10:00" @if ($bookingdata->time == '10:00') selected @endif>10:00</option>
                                    <option value="11:00" @if ($bookingdata->time == '11:00') selected @endif>11:00</option>
                                    
                                </select>

                                </div>
                                <div class="col-sm-2">
                                    
                                <select class="form-control" name="AMPM" id="">
                                    
                                    <option value="AM"  @if ($bookingdata->AMPM == 'AM') selected @endif>AM</option>
                                    <option value="PM" @if ($bookingdata->AMPM == 'PM') selected @endif>PM</option>
                                
                                </select>
                                </div>
                                
                            </div>

                        <button type="submit" class="btn btn-success">Book Vehicle</button>
                        
                            
                        <a href="{{route('home')}}" class="btn btn-default">Cancel</a>
                       
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('script')
    

    <script>
        $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 160,
        gutter: 20
        });
    </script>
@endsection