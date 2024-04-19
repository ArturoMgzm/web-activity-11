<!DOCTYPE html>
<!-- Stored in resources/views/layouts/app.blade.php --> 
<html> 
  <head> 
    <title>App Name - @yield('title')</title> 
  </head> 
  <body> 

        <nav>
          <ul>
              <li class="{{ request()->is('home') ? 'active' : 'inactive' }}"><a href="{{ url('/home') }}">Home</a></li>
              <li class="{{ request()->is('contact') ? 'active' : 'inactive' }}"><a href="{{ url('/contact') }}">Contact</a></li>
              <li class="{{ request()->is('photos') ? 'active' : 'inactive' }}"><a href="{{ url('/photos') }}">Photos</a></li>
          </ul>
        </nav>
    
      <div class="container"> 
        @yield('content', View::make('contact'))
      </div> 
      
  </body>
  @section('footer') 
  <footer>
       @auth 
          <div class="container"> The user is authenticated... </div>
        @endauth 

        @guest 
          <div class="container"> The user is not authenticated... </div>
        @endguest 
  </footer>

</html> 

<style>
    a{
        color: #FFFFF
    }
    .inactive{
        color: #AAAAAA;
    }
    .active {
    font-weight: bold;
    color: #AF00AF;
}
</style>

