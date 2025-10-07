<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

@include('partials.css')

<body class="body background-white">

    <!-- preload -->
    <div class="preload preload-container" style="background-color: #f5f5f7">
        <div class="middle">
            {{-- <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div> --}}
            <img id="logo_header" src="{{ asset('images/hivi-logo.png') }}"
                data-retina="{{ asset('images/hivi-logo.png') }}">
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="pt-40">

            @include('partials.header')

            @yield('content')

            @include('partials.footer')

        </div>
        <!-- /#page -->

    </div>
    <!-- /#wrapper -->

    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>

    @include('partials.js')

</body>

</html>
