@extends('layout')

@section('content')
<h1>clients </h1>

<ul>
    @foreach($clients as $client)
        <li>{{ $client->name }}</li> 
    @endforeach
</ul>

@endsection