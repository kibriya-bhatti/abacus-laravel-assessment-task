<!-- Page Content -->
<div class="bg-image" style="background-image: url('assets/media/photos/photo28@2x.jpg');">
    <div class="row no-gutters bg-primary-dark-op">
        <!-- Meta Info Section -->
        <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <a class="link-fx font-w600 font-size-h2 text-white" href="{{ route('login') }}">
                        Meal Reservation System
                    </a>
                    <p class="text-white-75 mr-xl-8 mt-2">
                        Welcome to the meal reservation system
                    </p>
                </div>
            </div>

        </div>
        <!-- END Meta Info Section -->

        <!-- Main Section -->
        <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-white">
            <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx font-w600 font-size-h3 text-dark" href="index.html">
                    One<span class="font-w400">UI</span>
                </a>
            </div>
            <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    {{ $slot }}
                </div>
            </div>
            <div
                class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between font-size-sm text-center text-sm-left">
                <p class="font-w500 text-black-50 py-2 mb-0">
                    <strong>OneUI 4.9</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Main Section -->
    </div>
</div>
<!-- END Page Content -->
