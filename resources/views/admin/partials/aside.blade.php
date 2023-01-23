<nav>
    <ul>
        <li class="{{ request()->segment(2) == '' ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-chart-pie"></i>Dashboard
            </a>
        </li>

        <li class="{{ request()->segment(2) == 'projects' ? 'active' : '' }}">
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
