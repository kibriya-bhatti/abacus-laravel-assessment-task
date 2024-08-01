<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('media/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/favicons/favicon-16x16.png') }}">
    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    @yield('template_linked_css')
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/custom.css') }}">
    @yield('css_after')
    <style>
        .logo_mini {
            width: 15% !important;
            margin-left: 0.8rem !important;
        }
        .error {
            color: #e56767 !important;
        }
        .select2-container {
            width: 100% !important;
            padding: 0;
        }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>
<body>
    <!-- Page Container -->
    <div id="page-container"
        class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay" class="font-size-sm">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link mr-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}"
                        alt="">
                </a>
                <!-- END User Avatar -->
                <!-- END User Info -->
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->
            <!-- Side Content -->
            <div class="content-side">
                <p>
                    Content..
                </p>
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->
        <!-- Sidebar -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5 text-center p-0 pl-md-0">
                <!-- Logo -->
                <a class="font-w600 text-dual ml-3 ml-md-0" href="/dashboard">
                    <span class="font-size-h5 tracking-wider">
                        <img src="{{ asset('media/logo/logo.webp') }}" class="w-50 ml-md-0 ml-4" alt="app-logo">
                    </span>
                </a>
                <!-- END Logo -->
                <!-- Extra -->
                <div>
                    <a class="d-lg-none btn btn-sm btn-dual mr-2" data-toggle="layout" data-action="sidebar_close"
                        href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Extra -->
            </div>
            <!-- END Side Header -->
            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('tasks') ? ' active' : '' }}"
                                href="{{ url('tasks') }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Tasks</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->
        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" id="action-nav-bar"
                        data-toggle="layout" data-action="sidebar_mini_toggle"
                        onclick="setLogo('mini'),moveLog('mini')">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->
                    <!-- Apps Modal -->
                    <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                    <!-- END Apps Modal -->
                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- END Open Search Section -->
                    <!-- Search Form (visible on larger screens) -->
                    <!-- END Search Form -->
                </div>
                <!-- END Left Section -->
                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    {{-- <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lang
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Fr</a>
                            <a class="dropdown-item" href="#">Eng</a>
                        </div>
                    </div> --}}
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual d-flex align-items-center"
                            id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="{{ asset('media/avatars/avatar10.jpg') }}"
                                alt="Header Avatar" style="width: 21px;">
                            <span class="d-none d-sm-inline-block ml-2">{{ Auth::user()->name }}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary-dark rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                                <p class="mt-2 mb-0 text-white font-w500">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="p-2">
                                <div role="separator" class="dropdown-divider"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center justify-content-between"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <span class="font-size-sm font-w500">{{ __('Log Out') }}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                    <!-- Notifications Dropdown -->
                    <!-- END Notifications Dropdown -->
                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
            <!-- Header Search -->
            <!-- END Header Search -->
            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->
        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->
        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                </div>
            </div>
        </footer>
        <!-- END Footer -->
        <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
        <!-- END Apps Modal -->
    </div>
    <!-- END Page Container -->
    <!-- OneUI Core JS -->
    <!-- OneUI Core JS -->
    <script src="{{ asset('js/oneui.app.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
        integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
        integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Laravel Scaffolding JS -->
    @yield('js_after')
    {{-- Scripts --}}
    <script type="text/javascript">
        $.fn.extend({
            toggleText: function(a, b) {
                return this.text(this.text() == b ? a : b);
            }
        });
        function setLogo(size) {
            if (size = 'mini') {
                console.log('asffs')
                $('.content-header').toggleClass('text-center');
                $('.tracking-wider img').toggleClass('logo_mini');
            } else {
                console.log('focus')
                $('.content-header').addClass('text-center');
                $('.tracking-wider img').css('width', '25%');
            }
        }
        function moveLog(movesize) {
            if (movesize == 'max') {
                $('nav').removeAttr("onmouseout");
                $('nav').removeAttr("onmouseover");
                $('#action-nav-bar').removeAttr('onclick');
                $('#action-nav-bar').attr('onclick', "setLogo('mini'),moveLog('mini')");
            }
            if (movesize == "mini") {
                $('nav').attr({
                    "onmouseout": "setLogo('original')",
                    "onmouseover": "setLogo('mini')",
                });
                $('#action-nav-bar').removeAttr('onclick');
                $('#action-nav-bar').attr("onclick", "setLogo('mini'),moveLog('max')");
            }
        }
    </script>
    @yield('template_scripts')
</body>
</html>
