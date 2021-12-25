<div class="wrapper flex space-between">
    <div class="header-menu-left">
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <div class="dropdown-menu">
                <li><a href="#">Manage Product ▼</a></li>

                <div class="dropdown-content">
                    <a href="view-product">View Product</a>
                    <a href="add-product">Add Product</a>
                </div>
            </div>

            <div class="dropdown-menu">
                <li><a href="#">Manage Category ▼</a></li>

                <div class="dropdown-content">
                    <a href="view-category">View Category</a>
                    <a href="add-category">Add Category</a>
                </div>
            </div>
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
