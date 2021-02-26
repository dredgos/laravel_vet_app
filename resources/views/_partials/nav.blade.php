<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/owners">Owners</a>
    <a class="navbar-brand" href="/owners/1/animals">Animals</a>

    @if (!Auth::check())
    <a class="navbar-brand" href="/login">Log In</a>
    @endif

    @if (Auth::check())
    <a class="navbar-brand" href="/owners/create">Create New Owner</a> 
    @endif

    

</nav>