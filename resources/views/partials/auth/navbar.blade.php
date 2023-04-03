<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard')?'active':'' }}" aria-current="page"
                    href="{{ url('/dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts')?'active':'' }}"
                    href="{{ url('/dashboard/posts') }}">
                    <span data-feather="file"></span>
                    Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/topic')?'active':'' }}" href="#">
                    <span data-feather="tag"></span>
                    Topics
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
    </div>
</nav>