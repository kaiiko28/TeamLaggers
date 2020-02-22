@extends('layouts.app')

@section('content')
<div><br><br><br>

<form method="post" action="{{ route('dropresult') }}">
   
    <div class="row">
        <div class="col-sm-6">
            <div style="background:blue;"  class="container-fluid">
                <div>
                    <div class="row">
                        <div class="col-sm-12" style="text-align:center;color:white;"><h3>Dictionary</h3></div><br>
                        <div class="col-sm-2">
                              </div>
                        <div class="col-sm-8">
                            <select style="height:30px;width:45%;" name="dialect" id="">
                                <option value="all">All</option>
                                <option value="bicolano">Bicolano</option>
                                <option value="bisaya">bisaya</option>
                                <option value="cebuano">cebuano</option>
                                <option value="hilagaynon">hilagaynon</option>
                                <option value="ilocano">ilocano</option>
                                <option value="tagalog">tagalog</option>
                                <option value="tausug">tausug</option>
                                <option value="waray">Waray</option>
                            </select>
                            <input style="width:45%;height:30px;" type="text"></div>
                        <div class="col-sm-2"></div>
                      
                        <div class="col-sm-6"></div>
                
                        
                            <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
                
            </div>
            <div class="border border-dark" style="padding:20px;background-color:rgba(1,1,1,0.3)">
                <div class="row">
                    <div style="margin:10px">
                        <h1>Lorem</h1>
                    </div>
                    <br>
                    <div style="margin:10px">
                        <h3 style="color:gray;">ipsum</h3>
                    </div>
                </div>
                
                <hr>
                <ul>
                    <li><b> Lorem </b> ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li><b> Lorem </b> Quia distinctio, debitis incidunt omnis delectus, cumque facilis voluptatem similique praesentium, qui nemo modi.</li>
                    <li><b>Lorem </b> Cumque eveniet, dolores reiciendis mollitia sunt aperiam nisi, doloremque voluptatibus tempore, temporibus molestias corrupti expedita facere dolore sint nesciunt quibusdam deleniti illo.</li>
                    <li> <b>Lorem </b>dolores perferendis quidem, sed eum, voluptatibus nihil.</li>
                    <li><b>Lorem</b>  porro quas vitae consequatur eligendi! Odit.</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">@include('dictionary.map')</div>
    </div>
</form>
</div>
<br>



@endsection