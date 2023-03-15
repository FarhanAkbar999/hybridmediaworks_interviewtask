@extends('layouts.user.app')
@section('content')
    <h1> Events </h1>
  <a class="btn btn-primary" href="{{ route('events.create') }}" role="button">Add</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <td>{{ $event->title }}</td>
      <td>{{ $event->start_time }}</td>
      <td>{{ $event->end_time }}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('events.edit', $event->id ) }}" role="button">Edit</a>
        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-primary" type="submit">Delete</button>
        </form>
        <!-- <a class="btn btn-primary" href="{{ route('events.destroy', $event->id ) }}" role="button">Delete</a>         -->
      </td>
    </tr>
  @endforeach
  {{ $events->links('vendor.pagination.bootstrap-5') }}
    
  </tbody>
</table>
@endsection