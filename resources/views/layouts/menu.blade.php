<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>User</p>
    </a>
</li>
