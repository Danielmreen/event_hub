@extends('layouts.app')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this event?');
        }
    </script>
    <div class="container" style="margin-bottom:60px">
        <h1>Events</h1>
        
        <div class="w3-row">
           
            
                @foreach($events as $event)
                        <table style="margin:10px">
                        <tr ><h1 class="w3-text-black"><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></h1>
                        <td><p>Date: {{ $event->startdate }} until {{$event->enddate}}<p>
                        <p>Time: {{$event->starttime}} until {{$event->endtime}} </p>
                        <p>Location: {{ $event->location }}</p>
                        <p>{{ $event->description }}</p>
                        </td>
                        <td style="padding:70px">
                        @if($event->image)
                           <img src="data:image/jpeg;base64,{{ $event->image }}" alt="{{ $event->name }}" style="max-width: 200px;">
                        @else
                                <p>No image available</p>
                        @endif
                        </td>
                        </tr>   

                          <td style="margin:20px">  <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirmDelete();" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
</td>
</table>
                        
                    
                @endforeach
                
</div>
    </div>
@endsection