<div class="wrapper flex space-between">
    <div class="header-menu-left">
        <ul>
            <li><a href="admin-index" class="{{ request()->is('admin-index') ? 'active' : '' }}">Home</a></li>
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
        <a href="#">
            <button>Logout</button>
        </a>
    </div>
</div>