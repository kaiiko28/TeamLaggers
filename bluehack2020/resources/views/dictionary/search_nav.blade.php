@extends('layouts.main')
@section('content')
<div>
    <div class="container-fluid">
        <div class="row">
        
            <select name="dialect" id="">
                <option value="">All</option>
                <option value="">Bicolano</option>
                <option value="">Cebuano</option>
                <option value="">Hiligaynon</option>
                <option value="">Ilocano</option>
                <option value="">Kapampangan</option>
                <option value="">pangasinan</option>
                <option value="">Tagalog</option>
                <option value="">Waray</option>
            </select>  
            <input type="text">

            <input type="textarea">
        
        </div>
    </div>
</div>
<div>
//output
</div>

@include('dictionary.map')

@endsection