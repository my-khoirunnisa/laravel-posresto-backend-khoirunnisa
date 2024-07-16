<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">NISA RESTO</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">NR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class='nav-item'>
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Users</span>
                </a>
            </li>
            <li class='nav-item'>
                <a href="{{ route('products.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Products</span>
                </a>
            </li>
            <li class='nav-item'>
                <a href="{{ route('categories.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Categories</span>
                </a>
            </li>
</div>
