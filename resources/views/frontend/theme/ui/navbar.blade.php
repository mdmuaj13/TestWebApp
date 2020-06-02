<nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-5">
    <ul class="navbar-nav">
        <a class="navbar-brand" href="{{ route('index') }}">KludioTest</a>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('application.create') }}">Submit Form</a>
        </li>
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('application.list') }}">Application List</a>
        </li> 
        <li class="nav-item"> 
            <a class="nav-link" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
        </li>
    </ul>
</nav>

