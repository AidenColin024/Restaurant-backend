@extends('layout')

@section('content')
<h1>Berichten</h1>

@foreach($messages as $message)
    <div>
        <h3>{{ $message->name }}</h3>
        <p>{{ $message->email }}</p>
        <p>{{ $message->message }}</p>
    </div>
@endforeach

@endsection