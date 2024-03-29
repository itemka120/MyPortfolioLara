<!-- Sidebar -->
<aside class="col-12 col-md-3 p-0 bg-body-tertiary">
    <div class="p-3">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="bi pe-none me-2 fs-4">Sidebar</span>
        </a>
        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            @foreach(Route::getRoutes() as $route)
                @php
                    $name = $route->getName();
                @endphp
                @if(Str::startsWith($name, 'dashboard.'))
                    <li class="nav-item mb-1">
                        <a href="{{ route($name) }}" class="nav-link">
                            {{ $name }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/public/storage/img/user.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>
                    Admin
                </strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</aside>

