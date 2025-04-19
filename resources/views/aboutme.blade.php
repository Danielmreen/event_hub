<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
 <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .bton{
    position: absolute;
    bottom: 40px;
    right: 16px;
  
  }
  </style>
</head>
<body>
@extends('layouts.app')


@section('profile')

   
   <div >
       <div >
        <h3>About me</h3>
        <div class="container"><img src="{{asset('/profiles.jpg')}}" alt="profile" style="width:30%;height:auto">
        <button class="bton w3-button w3-circle w3-black">+</button>
      </div>
        
        <p>Name : {{$user->name}}</p>
        <p>Email address: {{$user->email}}</p>
       
        </div>
    </div>   
  
@endsection




</body>



</html>