@extends('layout')

@section('content')

<div class="menu-section">
    <div class="menu-header">
        <div>
            <span class="section-label">Ontvangen berichten</span>
            <h1>Berichten</h1>
        </div>
    </div>

    @foreach($messages as $message)
        <div class="dish-row">
            <div class="dish-info">
                <h2>{{ $message->name }}</h2>
                <p class="description">{{ $message->email }}</p>
                <p style="margin-top: 0.6rem; color: var(--text); font-size: 0.95rem; line-height: 1.7;">
                    {{ $message->message }}
                </p>
            </div>
        </div>
    @endforeach

</div>

@endsection