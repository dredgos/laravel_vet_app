
@if (!Auth::check())
    
@endif

@if (Auth::check())
    <a href="/logout"><button class="btn btn-primary">Log Out</button></a>
    <br>

@endif

