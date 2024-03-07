<header id="header" class="header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}"
        style="height: 100.8px;">
    <div class="header-body border-top-0" style="height: 390px;">
        <div class="header-container container-fluid px-lg-4" style="height: 100px;">
            <div class="header-row">
                <div class="header-column header-column flex-grow-0">
                    <div class="header-row pe-4">
                        <div class="header-logo" style="width: 64px; height: 64px;">
                            <a href="/">
                                <img src="/public/storage/img/developpement-web.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-nav header-nav-links justify-content-center">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="header-mobile-border-top collapse show" style="">
                                    @auth()
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="/">
                                                Home
                                                <i class="fas fa-chevron-down"></i><i
                                                    class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="/about">
                                                About
                                                <i class="fas fa-chevron-down"></i><i
                                                    class="fas fa-chevron-down"></i></a>
                                        </li>
                                    </ul>

                                    @else()
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/">
                                                    Home
                                                    <i class="fas fa-chevron-down"></i><i
                                                        class="fas fa-chevron-down"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/about">
                                                    About
                                                    <i class="fas fa-chevron-down"></i><i
                                                        class="fas fa-chevron-down"></i></a>
                                            </li>

                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/register">
                                                    Register
                                                    <i class="fas fa-chevron-down"></i><i
                                                        class="fas fa-chevron-down"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="/login">
                                                    Login
                                                    <i class="fas fa-chevron-down"></i><i
                                                        class="fas fa-chevron-down"></i></a>
                                            </li>
                                        </ul>

                                    @endauth
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                @auth()
                    <div class="header-column header-column flex-grow-0 justify-content-center">
                        <div class="header-row ps-4 justify-content-end">
                            <ul class="header-nav-icons">
                                <div class="dropdown text-end">
                                    <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown">
                                        <img src="/public/storage/img/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu text-small">
                                        <li>
                                            <div class="dropdown-item disabled text-color-black">
                                                Welcome, {{auth()->user()->name}}.
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <!-- Disable the link for the first dropdown item -->
                                            <a class="dropdown-item" href="#">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
