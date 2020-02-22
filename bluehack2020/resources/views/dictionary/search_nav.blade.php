@extends('layouts.main')
@section('content')
<div>
<form method="post" action="{{ route('dropresult') }}">
    <div class="container-fluid">
        <div class="row">
        
            <select name="dialect" id="">
                <option value="all">All</option>
                <option value="bicolano">Bicolano</option>
                <option value="cebuano">Cebuano</option>
                <option value="hiligaynon">Hiligaynon</option>
                <option value="ilocano">Ilocano</option>
                <option value="kapampangan">Kapampangan</option>
                <option value="pangasinan">pangasinan</option>
                <option value="tagalog">Tagalog</option>
                <option value="waray">Waray</option>
            </select>  
            <input type="text">

            <input type="textarea" name="texta1">
            <button type="submit">Submit</button>
        </div>
    </div>
</form>
</div>
<div>
//output
</div>

@include('dictionary.map')

@endsection