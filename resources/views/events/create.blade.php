@extends('layouts.app')
<script>
/*const input = document.getElementById('image');
                input.addEventListener('change', previewPhoto);
                const previewPhoto = () => {
    const file = input.files;
    if (file) {
        const fileReader = new FileReader();
        const preview = document.getElementById('image');
        fileReader.onload = event => {
            preview.setAttribute('src', event.target.result);
        }
        fileReader.readAsDataURL(file[0]);
    }
}
const input = document.getElementById('file-input');
const previewPhoto = () => {
    const file = input.files;
    if (file) {
        const fileReader = new FileReader();
        const preview = document.getElementById('image');
fileReader.onload = function (event) {
            preview.setAttribute('src', event.target.result);
        }
        fileReader.readAsDataURL(file[0]);
    }
}   
input.addEventListener("change", previewPhoto);
*/
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
        <h1>Create Event</h1>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Start Date</label>
                <input type="date" class="form-control" id="startdate" name="startdate" required>
            </div>
            <div class="form-group">
                <label for="date">End Date</label>
                <input type="date" class="form-control" id="enddate" name="enddate" required>
            </div>
            <div class="form-group" >
                <label for="time">Start Time</label>
                <input type="time" class="form-control" id="starttime" name="starttime" required>
                
            </div>
            <div class="form-group" >
                <label for="time">End Time</label>
                <input type="time" class="form-control" id="endtime" name="endtime" required>
                
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group" >
                <label for="image">Image</label>
                <input type="file" onchange="readURL(this);" class="form-control" id="image" name="image" required><img id="img" src="http://placehold.it/180" alt="Preview Uploaded Image" style="max-width:180px">
                
            </div>
            <button style="float: left; margin-bottom:60px" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
