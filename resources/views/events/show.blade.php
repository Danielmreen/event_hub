@extends('layouts.app')

@section('content')
<script>
        function confirmJoin() {
            return confirm('Are you sure you want to register for this event?');
        }
    </script>
    <div class="container">
        <table>
        <tr><h1>{{ $event->name }}</h1>
        <td><p>{{ $event->description }}</p>
        <p>Date: {{ $event->startdate }} until {{ $event->enddate }}</p>
        <p>Time: {{$event->starttime}} until {{$event->endtime}}</p>
        <p>Location: {{ $event->location }}</p></td>
        
        <td>
        <form action="" onsubmit="return confirmJoin();" >
        <button class="btn btn-outline-primary" style="margin:40px" >REGISTER</button>
    </form>
    </td>
</tr>
</table>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
    </div>
@endsection