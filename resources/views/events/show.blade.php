@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Event Details</h2>
        <p><strong>Title:</strong> {{ $event->title }}</p>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <p><strong>Time:</strong> {{ $event->time ?? '-' }}</p>
        <p><strong>Location:</strong> {{ $event->location ?? '-' }}</p>
        <a href="{{ route('events.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
