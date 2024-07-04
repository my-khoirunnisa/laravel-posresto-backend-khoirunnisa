<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">NISA Resto</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RN</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard - Resto</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-fire"></i><span>Users</span></a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-fire"></i><span>Products</span></a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-fire"></i><span>Categories</span></a>
            </li>
        </ul>
    </aside>
</div>
