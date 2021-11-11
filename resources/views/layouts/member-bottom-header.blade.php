<div class="wrapper flex space-between">
    <div class="header-menu-left">
        <ul>
            <li><a href="/member-index" class="{{ request()->is('member-index') ? 'active' : '' }}">Home</a></li>
            <li><a href="#">My Cart</a></li>
            <li><a href="#">History Transaction</a></li>
        </ul>
    </div>

    <div class="header-menu-right">
        {{-- <a href="#">
            <button>Logout</button>
        </a> --}}

        <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
