<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="/teams">Teams</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/news">News</a>
    </li>
    @if (!auth()->check())
    <li class="nav-item">
      <a class="nav-link" href="/login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/register">Register</a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="/news/create">Create news</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>
    @endif
</ul>