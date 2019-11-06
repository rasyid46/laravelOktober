<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
  @include('layouts.nav') 
    <main role="main" class="container">
    @yield('content')
    </main> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
