<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/owners">Owners</a>
    @if (!Auth::check())
    <a class="navbar-brand" href="/login">Log In</a>
    @endif
    @if (Auth::check())
    <a class="navbar-brand" href="/owners/create">Create New Owner</a>
    <a class="navbar-brand" href="/logout">Log Out</a>
    @endif

</nav>