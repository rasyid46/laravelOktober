<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{url('/')}}">Menu</a>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <ul class="navbar-nav mr-auto">
@if (Sentinel::check()) 
  <li><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
  <li class="nav-item"><a>Welcome {!! Sentinel::getUser()->email !!}</a></li>  
@else
          <!-- <li class="nav-item active"> -->
          <li> <a class="nav-link" href="{{route('login')}}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('signup')}}">Signup</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('reminders.create')}}">Forgot</a></li>
@endif
    </ul>
  </div>
</nav>

@if(session('notice'))  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{!!session('notice')!!}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 
@endif

@if(session('error'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{!!session('error')!!}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
