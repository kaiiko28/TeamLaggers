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
                    
                    <h2>Your Booking</h2>
                    <h5 class="text-center">Pickup from: <span style="font-weight:800">{{$from}}</span> Drop off to: <span style="font-weight:800">{{$to}}</span></h5>
                        <hr>

                    <h2>Available Vehicles</h2>
                    

                    <form method="post" action="{{ route('transportation.book') . '?from=' . $from . '&to=' . $to }}" class="text-center">
                        @csrf
                        <div class="grid boxed text-center">

                            @if (count($result) > 0)
                                @foreach ($result as $result)
                                    <input type="radio" id="{{$result->id}}" name="vehicle" value="{{$result->id}}">
                                    <label for="{{$result->id}}">
                                        <img class="grid-item" src="{{ asset('/') . $result->owner_vehicle}}" alt="">
                                        <h3>₱ {{$result->vehicle_rent_price}} / hr</h3>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                            <div class="row justify-content-md-center my-5" >
                                
                                <div class="col-sm-3 sm-offset-3">
                                    <input 
                                    name="date" 
                                    id="date" 
                                    class="form-control" 
                                    style="width: 100%; display: inline;" 
                                    onchange="invoicedue(event);" 
                                    required=""
                                    value="{{ old('date') }}" 
                                    type="date">
                                 </div>
                                <div class="col-sm-3">
                                <select class="form-control"  name="time" id="">
                                    
                                    <option value="12:00">12:00</option>
                                    <option value="1:00">1:00</option>
                                    <option value="2:00">2:00</option>
                                    <option value="3:00">3:00</option>
                                    <option value="4:00">4:00</option>
                                    <option value="5:00">5:00</option>
                                    <option value="6:00">6:00</option>
                                    <option value="7:00">7:00</option>
                                    <option value="8:00">8:00</option>
                                    <option value="9:00">9:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    
                                </select>

                                </div>
                                <div class="col-sm-2">
                                    
                                <select class="form-control" name="AMPM" id="">
                                    
                                    <option value="AM">AM</option>
                                    <option value="AM">PM</option>
                                
                                </select>
                                </div>
                                
                            </div>

                        <button type="submit" class="btn btn-success">Book Vehicle</button>
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