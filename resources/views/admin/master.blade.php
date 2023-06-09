<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{'/'}}admin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
{{--    <a class="navbar-brand ps-3" href="{{route('dashboard')}}">NIAZ</a>--}}
    <a href = "{{route('dashboard')}}" class = "navbar-brand ps-3"><img src="{{'/'}}website/assets/logo.png" width="150" height="50"/></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <a href="" class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>

{{--                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">--}}
{{--                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>--}}
{{--                        Website--}}
{{--                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">--}}
{{--                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">--}}
{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">--}}
{{--                                Home--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.home')}}">Add</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.home_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError1" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                About--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.about')}}">Add</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.about_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError2" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Resume--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.resume.add')}}">Add</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.resume_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError3" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Services--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.services')}}">Edit</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.services_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError4" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Skill--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.skill')}}">Edit</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.skill_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError5" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Project--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.project')}}">Add Project</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.project_manage')}}">Manage Project</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError6" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Contact--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.contact')}}">Add</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.contact_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}

{{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError7" aria-expanded="false" aria-controls="pagesCollapseError">--}}
{{--                                Footer--}}
{{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="pagesCollapseError7" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                                <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.footer')}}">Add</a>--}}
{{--                                    <a class="nav-link" href="{{route('dashboard.footer_manage')}}">Manage</a>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </nav>--}}
{{--                    </div>--}}









                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts1">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Website Module
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('dashboard.home_manage')}}">Home</a>
                            <a class="nav-link" href="{{route('dashboard.about_manage')}}">About</a>
                            <a class="nav-link" href="{{route('dashboard.resume_manage')}}">Resume</a>
                            <a class="nav-link" href="{{route('dashboard.services_manage')}}">Services</a>
                            <a class="nav-link" href="{{route('dashboard.skill_manage')}}">Skill</a>
                            <a class="nav-link" href="{{route('dashboard.project_manage')}}">Project</a>
                            <a class="nav-link" href="{{route('dashboard.contact_manage')}}">Contact</a>
                            <a class="nav-link" href="{{route('dashboard.footer_manage')}}">Footer</a>
                        </nav>
                    </div>















                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Admin Module
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('dashboard.admin_add')}}">Create Admin</a>
                            <a class="nav-link" href="{{route('dashboard.admin_manage')}}">Manage Admin</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts1">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Feedback From User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('feedback-manage')}}">Manage Feedback</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>

{{-----------------body-------------------------}}

            @yield('body')


{{-----------------body end-------------------------}}


        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">&copy; 2023 All Rights Reserved | Niaz </div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{'/'}}admin/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{'/'}}admin/assets/demo/chart-area-demo.js"></script>
<script src="{{'/'}}admin/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{'/'}}admin/js/datatables-simple-demo.js"></script>
</body>
</html>

