<!-- Header START -->
<header class="navbar-light navbar-sticky">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl z-index-9">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="light-mode-item navbar-brand-item" src="https://hoverbusinessservices.com/images/HBS-Logo.png"
                    alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="https://hoverbusinessservices.com/images/HBS-Logo.png"
                    alt="logo">
            </a>
            <!-- Logo END -->



            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <!-- Nav Search START -->
                <div class="col-xxl-6">
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="rounded position-relative">
                                <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search"
                                    placeholder="Search" aria-label="Search">
                                <button
                                    class="btn btn-link bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Nav Search END -->

                <!-- Nav Main menu START -->

                <!-- Nav category menu END -->

                <ul class="navbar-nav navbar-nav-scroll ms-auto">
                    @auth
                        <!-- Nav item 1  Support -->
                        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>

                        <!-- Nav item 2 My learning -->
                        <li class="nav-item"><a class="nav-link" href="#">My Test</a></li>
                    @endauth
                </ul>
                <!-- Nav Main menu END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile and notification START -->
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
                <!-- Add to cart START -->
                <li class="nav-item ms-2 dropdown ">
                    <!-- Cart button -->
                    <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-cart3 fa-fw"></i>
                    </a>
                    <!-- badge -->
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark mt-xl-2 ms-n1">2
                        <span class="visually-hidden">unread messages</span>
                    </span>

                    <!-- Cart dropdown menu START -->
                    <div
                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                        <div class="card bg-transparent">
                            <div class="card-header bg-transparent border-bottom py-4">
                                <h5 class="m-0">Cart items</h5>
                            </div>
                            <div class="card-body p-0">

                                <!-- Cart item START -->
                                <div class="row p-3 g-2">
                                    <!-- Image -->
                                    <div class="col-3">
                                        <img class="rounded-2" src="{{ static_asset('assets/images/book/02.jpg') }}"
                                            alt="avatar">
                                    </div>

                                    <div class="col-9">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0">Angular 4 Tutorial in audio (Compact Disk)</h6>
                                            <a href="#" class="small text-primary-hover"><i
                                                    class="bi bi-x-lg"></i></a>
                                        </div>
                                        <!-- Select item -->
                                        <form class="choices-sm pt-2 col-4">
                                            <select class="form-select js-choice border-0 bg-transparent"
                                                data-search-enabled="false">
                                                <option>1</option>
                                                <option selected="">2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <!-- Cart item END -->

                                <!-- Divider -->
                                <hr class="m-0">

                                <!-- Cart item START -->
                                <div class="row p-3 g-2">
                                    <!-- Image -->
                                    <div class="col-3">
                                        <img class="rounded-2" src="{{ static_asset('assets/images/book/04.jpg') }}"
                                            alt="avatar">
                                    </div>

                                    <div class="col-9">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0">The Principles of Beautiful Graphics Design (Paperback)
                                            </h6>
                                            <a href="#" class="small text-primary-hover"><i
                                                    class="bi bi-x-lg"></i></a>
                                        </div>
                                        <!-- Select item -->
                                        <form class="choices-sm pt-2 col-4">
                                            <select class="form-select js-choice border-0 bg-transparent"
                                                data-search-enabled="false">
                                                <option selected="">1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <!-- Cart item END -->

                            </div>
                            <!-- Button -->
                            <div
                                class="card-footer bg-transparent border-top py-3 text-center d-flex justify-content-between position-relative">
                                <a href="#" class="btn btn-sm btn-light mb-0">View Cart</a>
                                <a href="#" class="btn btn-sm btn-success mb-0">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!-- Cart dropdown menu END -->
                </li>
                <!-- Add to cart END -->
                @if (Route::has('login'))
                    @auth
                        <!-- Wishlist START -->
                        <li class="nav-item ms-2 ms-sm-3 d-none d-sm-block">
                            <a class="btn btn-light btn-round mb-0" href="#"> <i class="bi bi-heart fa-fw"></i></a>
                        </li>
                        <!-- Wishlist END -->

                        <!-- Notification dropdown START -->
                        <li class="nav-item ms-2 ms-sm-3 dropdown">
                            <!-- Notification button -->
                            <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-auto-close="outside">
                                <i class="bi bi-bell fa-fw"></i>
                            </a>
                            <!-- Notification dote -->
                            <span class="notif-badge animation-blink"></span>

                            <!-- Notification dropdown menu START -->
                            <div
                                class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                                <div class="card bg-transparent">
                                    <div
                                        class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                        <h6 class="m-0">Notifications <span
                                                class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                        <a class="small" href="#">Clear all</a>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-unstyled list-group-flush">
                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                    <div class="me-3">
                                                        <div class="avatar avatar-md">
                                                            <img class="avatar-img rounded-circle"
                                                                src="{{ static_asset('assets/images/avatar/03.jpg') }}"
                                                                alt="avatar">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">Update v2.3 completed successfully</h6>
                                                        <p class="small text-body m-0">What's new! Find out about new
                                                            features
                                                        </p>
                                                        <small class="text-body">5 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                        <a href="#" class="stretched-link">See all incoming activity</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification dropdown menu END -->
                        </li>
                        <!-- Notification dropdown END -->

                        <!-- Profile dropdown START -->
                        <li class="nav-item ms-3 dropdown">
                            <!-- Avatar -->
                            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                                data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="avatar-img rounded-circle"
                                    src="{{ static_asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                            </a>

                            <!-- Profile dropdown START -->
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                aria-labelledby="profileDropdown">
                                <!-- Profile info -->
                                <li class="px-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <img class="avatar-img rounded-circle shadow"
                                                src="{{ static_asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                        </div>
                                        <div>
                                            <a class="h6" href="#">{{ Auth::user()->name }}</a>
                                            <p class="small m-0">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Links -->
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"><i
                                            class="bi bi-info-circle fa-fw me-2"></i>Dashboard</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit
                                        Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account
                                        Settings</a></li>

                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>

                                    <a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-power fa-fw me-2"></i>Sign Out
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Dark mode options START -->
                                <li>
                                    <div
                                        class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                        <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-sun fa-fw mode-switch"
                                                viewbox="0 0 16 16">
                                                <path
                                                    d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                                </path>
                                                <use href="#"></use>
                                            </svg> Light
                                        </button>
                                        <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                                viewbox="0 0 16 16">
                                                <path
                                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z">
                                                </path>
                                                <path
                                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                                </path>
                                                <use href="#"></use>
                                            </svg> Dark
                                        </button>
                                        <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                                viewbox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z">
                                                </path>
                                                <use href="#"></use>
                                            </svg> Auto
                                        </button>
                                    </div>
                                </li>
                                <!-- Dark mode options END-->
                            </ul>
                            <!-- Profile dropdown END -->
                        </li>
                    @else
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="login_logout"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                                <span class="d-none d-lg-inline-block">Sign In/Up</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" aria-labelledby="login_logout">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        <i class="bi bi-person fa-fw me-2"></i> Sign In
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a class="dropdown-item" href="{{ route('register') }}">
                                            <i class="fas fa-sign-in-alt me-2"></i> Sign Up
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endauth
                @endif





            </ul>
            <!-- Profile and notification END -->
        </div>
    </nav>
    <!-- Nav END -->

    <hr class="my-0">

    <!-- Category Nav link START -->
    <nav class="navbar navbar-expand-xl nav-category">
        <div class="container px-0">

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler m-auto w-100" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse2" aria-controls="navbarCollapse2" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-grid-fill"></i> Category
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse2">
                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll mx-auto">
                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="demoMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Previous Year
                            Paper</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">All Previous Year Paper</a>
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                    data-bs-popper="none">
                                    <div class="row p-4">
                                        <!-- Dropdown column item -->
                                        <div class="col-xl-4 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Get started</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-4 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Degree</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-02.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Indiana</a>
                                                    <p class="mb-0 small">Masters</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-03.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">College</a>
                                                    <p class="mb-0 small">Medical</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Andeerson</a>
                                                    <p class="mb-0 small">Bachelor</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-04.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">University</a>
                                                    <p class="mb-0 small">Masters</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-4 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Certificate</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-google text-google-icon"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Google SEO </a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Business</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Facebook
                                                        social</a>
                                                    <p class="mb-0 small">Expert advice</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Creative graphics
                                                    </a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">All Previous Year Paper</a>
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                    data-bs-popper="none">
                                    <div class="row p-4">
                                        <!-- Dropdown column item -->
                                        <div class="col-xl-4 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Get started</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-4 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Degree</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">American </a>
                                                    <p class="mb-0 small">computer </p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-02.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Indiana</a>
                                                    <p class="mb-0 small">Masters</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-03.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">College</a>
                                                    <p class="mb-0 small">Medical</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-01.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">Andeerson</a>
                                                    <p class="mb-0 small">Bachelor</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex position-relative">
                                                <img src="{{ static_asset('assets/images/client/uni-logo-04.svg') }}"
                                                    class="icon-md" alt="">
                                                <div class="ms-3">
                                                    <a class="stretched-link h6 mb-0" href="#">University</a>
                                                    <p class="mb-0 small">Masters</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-4 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Certificate</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-google text-google-icon"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Google SEO </a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Business</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Facebook
                                                        social</a>
                                                    <p class="mb-0 small">Expert advice</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Creative graphics
                                                    </a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li> <a class="dropdown-item" href="#">All Previous Year Paper</a> </li>
                            <li> <a class="dropdown-item" href="#">FCI</a> </li>
                            <li> <a class="dropdown-item" href="#">CSIR SO/ASO</a> </li>
                            <li> <a class="dropdown-item" href="#">Bank PO</a> </li>
                            <li> <a class="dropdown-item" href="#">SSC</a> </li>
                            <li> <a class="dropdown-item" href="#">Defence & Police</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Exams</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="#">Upcoming Exams</a> </li>
                            <li> <a class="dropdown-item" href="#">NIACL Assistant</a> </li>
                            <li> <a class="dropdown-item" href="#">Bank PO</a> </li>
                            <li> <a class="dropdown-item" href="#">SEBI</a> </li>
                            <li> <a class="dropdown-item" href="#">RBI</a> </li>
                            <li> <a class="dropdown-item" href="#">UIIC AO Generalist</a> </li>
                            <li> <a class="dropdown-item" href="#">NABARD</a> </li>
                        </ul>
                    </li>
                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Free Materials</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="#">Web Development</a> </li>
                            <li> <a class="dropdown-item" href="#">Data Science</a> </li>
                            <li> <a class="dropdown-item" href="#">Mobile Development</a> </li>
                            <li> <a class="dropdown-item" href="#">Programing Language</a> </li>
                            <li> <a class="dropdown-item" href="#">Software Testing</a> </li>
                            <li> <a class="dropdown-item" href="#">Software Engineering</a> </li>
                            <li> <a class="dropdown-item" href="#">Software Development Tools</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Free Mock Test</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="#">Free Mock Test</a> </li>
                            <li> <a class="dropdown-item" href="#">CSIR SO/ASO</a> </li>
                            <li> <a class="dropdown-item" href="#">IBPS RRB</a> </li>
                            <li> <a class="dropdown-item" href="#">Bank PO</a> </li>
                            <li> <a class="dropdown-item" href="#">RBI</a> </li>
                            <li> <a class="dropdown-item" href="#">NIACL Assistant</a> </li>
                            <li> <a class="dropdown-item" href="#">SEBI</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> General Awareness </a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="#">Beepedia-Current Affairs</a> </li>
                            <li> <a class="dropdown-item" href="#">Beepedia-Current Affairs (Hindi)</a> </li>
                            <li> <a class="dropdown-item" href="#">Union Budget 2024-2025</a> </li>
                            <li> <a class="dropdown-item" href="#">Union Budget 2023-2024</a> </li>
                            <li> <a class="dropdown-item" href="#">Economic Survey 2022-23</a> </li>

                        </ul>
                    </li>

                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Daily Practice</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="#">Current Affairs</a> </li>
                            <li> <a class="dropdown-item" href="#">General Awareness</a> </li>
                            <li> <a class="dropdown-item" href="#">English</a> </li>
                            <li> <a class="dropdown-item" href="#">Quantitative Aptitude</a> </li>
                            <li> <a class="dropdown-item" href="#">Reasoning Aptitude</a> </li>
                            <li> <a class="dropdown-item" href="#">Make My Test</a> </li>
                            <li> <a class="dropdown-item" href="#">RBI Assessment Test</a> </li>
                        </ul>
                    </li>

                    <!-- Navmitem 2 link -->
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>

                    <!-- Nav item 3 link -->
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact us</a></li>

                </ul>
            </div>
            <!-- Main navbar END -->
        </div>
    </nav>
    <!-- Category Nav link END -->

</header>
<!-- Header END -->
