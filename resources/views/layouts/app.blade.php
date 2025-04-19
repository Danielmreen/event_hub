<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">EVENTHUB</a>
      </li>
          
    </ul>
  </div>  
</nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Event Management System</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link"><form action="{{ url('/') }}" method="GET">
        <input type="text" name="search" placeholder="Search events" value="{{ request()->query('search') }}">
        <button type="submit" class="btn btn-outline-secondary ">Search</button>
    </form>
</a>
</li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    
                   
                    
                    <li class="nav-item"><a class="nav-link" href="{{ route('events.index') }}">Events</a></li>

                    <li><a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user') }}">Profile</a></li>
                    
                @endguest
                
                
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-right:50px ">

    @yield('profile')
</div>
    <div class="container">
        @yield('content')
    </div>
    <div class="text-center w3-bottom" style="background-color:black">
  <p style="color:white">All rights reserved</p>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
