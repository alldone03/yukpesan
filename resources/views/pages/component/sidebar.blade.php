<li class="sidebar-item @if (Request::path() == 'dashboard') active @endif">
    <a href="{{ route('dashboard') }}" class="sidebar-link ">
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>
@if (Auth::user()->roles == 2 || Auth::user()->roles == 1)
    <li class="sidebar-item @if (Request::path() == 'toko') active @endif">
        <a href="{{ route('toko') }}" class="sidebar-link ">
            <i class="bi bi-grid-fill"></i>
            <span>Toko</span>
        </a>
    </li>
    <li class="sidebar-item @if (Request::path() == 'menu') active @endif">
        <a href="{{ route('menu') }}" class="sidebar-link ">
            <i class="bi bi-grid-fill"></i>
            <span>Menu</span>
        </a>
    </li>
@endif
