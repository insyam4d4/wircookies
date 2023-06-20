<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand text-center" href="index.html">
                {{-- <b class="logo-icon">
                    <img src="{{ asset('media/images/logo.jpg') }}" alt="homepage" class="dark-logo" />
                    <img src="{{ asset('media/images/logo.jpg') }}" alt="homepage" class="light-logo" />
                </b> --}}
                <span class="logo-text">
                    <img src="{{ asset('media/images/logo-text.jpeg') }}" alt="homepage" class="dark-logo w-75" />
                    <img src="{{ asset('media/images/logo-text.jpeg') }}" class="light-logo" alt="homepage" />
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="mdi mdi-menu"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                        href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span
                            class="font-16">Search</span></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                            class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('templates/flexy/assets/images/users/profile.png') }}" alt="user"
                            class="rounded-circle" width="31">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)"><i
                                class="ti-user m-r-5 m-l-5"></i>{{ auth()->user()->name }}</a>
                        <a class="dropdown-item" href="javascript:void(0)"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">><i
                                class="ti-logout m-r-5 m-l-5"></i>
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
