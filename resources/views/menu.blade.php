<nav id="menu">
    <div>
        <a href="/">
            <img class="logo" src="{{ asset('/images/crown-logo.svg') }}" alt="logo" width="50px"/>
        </a>
    </div>
    <ul class="flex">
        <li class="mr-2">
            <a href="/store">
                Store
            </a>
        </li>
        @auth
        <li class="mr-2">
            <a href="/admin">
                Admin
            </a>
        </li>
        <li>
            <form method="POST" action="/logout">
                @csrf
                <button style="color: white; cursor: pointer" type="submit">Logout</button>
            </form>
        </li>
        @endauth
        @guest
        <li>
            <a href="/login">
                Login
            </a>
        </li>
        @endguest
      
    </ul>
</nav>