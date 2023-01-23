<nav>
    <ul>
        <li class="{{ request()->routeIs('admin.dashboard') == 'admin' ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-chart-pie"></i>Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.projects.index') == 'projects' ? 'active' : '' }}">
            <a href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-hammer"></i>Projects
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-question"></i>lorem
            </a>
        </li>
    </ul>
</nav>
{{-- class="debug" --}}
