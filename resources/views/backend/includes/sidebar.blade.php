<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <img class="navbar-brand-item" src="{{ static_asset('assets/images/logo-light.svg') }}" alt="">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <!-- Menu item 1 -->
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link active"><i
                            class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>


                <!-- menu item 2 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button"
                        aria-expanded="false" aria-controls="collapsepage">
                        <i class="bi bi-basket fa-fw me-2"></i>Category
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsepage" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.all') }}"> Category</a>
                        </li>
                    </ul>
                </li>

                <!-- Menu item 3 -->
                <li class="nav-item"> <a class="nav-link" href="admin-student-list.html"><i
                            class="fas fa-user-graduate fa-fw me-2"></i>Students</a></li>

                <!-- Menu item 4 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseinstructors" role="button"
                        aria-expanded="false" aria-controls="collapseinstructors">
                        <i class="fas fa-graduation-cap fa-fw me-2"></i>Online Exam
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseinstructors" data-bs-parent="#navbar-sidebar">

                        <li class="nav-item">
                            <a class="nav-link" href="">Import Question</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.quiz.instruction.index')}}">Instruction </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.quiz.paper.index')}}">Question Papper </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.quiz.bank.index')}}">Question Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.quiz.level.index')}}">Question Level</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.category.all') }}">Question Group</a>
                        </li>

                    </ul>
                </li>

                <!-- Menu item 5 -->
                <li class="nav-item"> <a class="nav-link" href="admin-review.html"><i
                            class="far fa-comment-dots fa-fw me-2"></i>Message</a></li>

               
                <!-- Menu item 8 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseproduct" role="button"
                        aria-expanded="false" aria-controls="collapseproduct">
                        <i class="bi bi-lock fa-fw me-2"></i>Product
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseproduct" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="sign-up.html">Product</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsereport" role="button"
                        aria-expanded="false" aria-controls="collapsereport">
                        <i class="far fa-clipboard fa-fw me-2"></i>Report
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsereport"
                        data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> 
                            <a class="nav-link" href="sign-up.html">Payment History Report</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="sign-up.html">Online Exam Report</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="sign-up.html">Online Exam Qustion Report</a>
                        </li>
                    </ul>
                </li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Setting</li>

                <!-- Menu item 9 -->
               
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsesetting" role="button"
                        aria-expanded="false" aria-controls="collapsesetting">
                        <i class="bi bi-gear me-2"></i>Setting
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsesetting"
                        data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{route('admin.generalsettings.index')}}">General Settings</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="sign-up.html">Payment Settings</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="sign-up.html">Email Settings</a>
                        </li>

                    </ul>
                </li>

                <!-- Menu item 10 -->
                <li class="nav-item"> <a class="nav-link" href="docs/changelog.html"><i
                            class="fas fa-sitemap fa-fw me-2"></i>Cache Clear</a></li>
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 mt-auto pt-3">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="{{ url('/') }}" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Home" target="_blank">
                        <i class="bi bi-globe"></i>
                    </a>
                    <a class="h5 mb-0 text-body" href="{{ route('logout') }}" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Sign out"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-power"></i>
                    </a>
                </div>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>
