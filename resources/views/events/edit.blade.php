@extends('layouts.app')
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@section('content')
    <div class="container">
        <h1>Edit Event</h1>
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $event->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Start Date</label>
                <input type="date" class="form-control" id="startdate" name="startdate" value="{{ $event->startdate }}" required>
            </div>
            <div class="form-group">
                <label for="date">End Date</label>
                <input type="date" class="form-control" id="enddate" name="enddate" value="{{ $event->enddate }}" required>
            </div>
            <div class="form-group" >
                <label for="time">Start Time</label>
                <input type="time" class="form-control" id="starttime" name="starttime" value="{{ $event->starttime }}" required>
            </div>
            <div class="form-group" >
                <label for="time">End Time</label>
                <input type="time" class="form-control" id="endtime" name="endtime" value="{{ $event->endtime }}" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}" required>
            </div>
            <div class="form-group" >
                <label for="image">Image</label>
                <input type="file" onchange="readURL(this);" class="form-control" id="image" name="image" required><img id="img" src="http://placehold.it/180" alt="Preview Uploaded Image" style="max-width:180px">
                
            </div>
        
            <button style="float: left; margin-bottom:60px" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
