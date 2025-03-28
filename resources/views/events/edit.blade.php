@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Event</h2>
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $event->title }}" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $event->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" class="form-control" value="{{ $event->date }}" required>
            </div>

            <div class="form-group">
                <label>Time (Optional)</label>
                <input type="time" name="time" class="form-control" value="{{ $event->time }}">
            </div>

            <div class="form-group">
                <label>Location (Optional)</label>
                <input type="text" name="location" class="form-control" value="{{ $event->location }}">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
