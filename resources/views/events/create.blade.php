@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Event</h2>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Time (Optional)</label>
            <input type="time" name="time" class="form-control">
        </div>

        <div class="form-group">
            <label>Location (Optional)</label>
            <input type="text" name="location" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
