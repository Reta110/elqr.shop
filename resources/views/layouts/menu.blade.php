<li class="nav-item {{ Request::is('banks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('banks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Banks</span>
    </a>
</li>
<li class="nav-item {{ Request::is('registers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('registers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Registers</span>
    </a>
</li>
