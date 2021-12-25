<div class="wrapper flex space-between">
    <div class="header-menu-left">
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        </ul>
    </div>

    <div class="header-menu-right">
        <a href="{{ url('login') }}">
            <button>Login</button>
        </a>
        <a href="{{ url('register') }}">
            <button>Register</button>
        </a>

    </div>
</div>
