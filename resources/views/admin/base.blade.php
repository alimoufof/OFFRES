<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

{{-- head --}}
@include('admin.partial.head')

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>    <!--*******************
        Preloader end
    ********************-->

        <!--**********************************
            Container
        ***********************************-->
            @yield('content')
        
        <!--**********************************
            Footer start
        ***********************************-->

        @include('admin.partial.footer.footerBase')
</body>
</html>