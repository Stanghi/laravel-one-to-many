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

        <li class="{{ request()->segment(3) == 'project-type' ? 'active' : '' }}">
            <a href="{{ route('admin.types_project') }}">
                <i class="fa-solid fa-folder"></i>Types list
            </a>
        </li>

        <li class="">
            <a href="#">
                <i class="fa-solid fa-tag"></i>Types
            </a>
        </li>
    </ul>
</nav>
