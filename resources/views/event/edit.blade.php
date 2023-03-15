@extends('layouts.user.app')
@section('content')
<h1>Add Event </h1>

<form method="POST" action="{{ route('events.update', $event->id ) }}">
    @method('PUT')
    @csrf
    <div class="form-floating mb-3">
        <input type="text" name="title" value="{{ $event->title }}" class="form-control" id="floatingInput" placeholder="Title" required>
        <label for="floatingInput">Event Title</label>
    </div>
    <div class="form-floating mb-3">
        <input type="datetime-local" name="start_time" value="{{ $event->start_time }}" class="form-control" id="floatingEventStartTime" placeholder="EventStartTime" required> 
        <label for="floatingEventStartTime">Event Start Time</label>
    </div>
    <div class="form-floating mb-3">
        <input type="datetime-local" name="end_time" value="{{ $event->end_time }}" class="form-control" id="floatingEventEndTime" placeholder="EventEndTime" required>
        <label for="floatingEventEndTime">Event End Time</label>
    </div>
    <button class="btn btn-primary" type="submit">Add Event</button>
</form>

@endsection   