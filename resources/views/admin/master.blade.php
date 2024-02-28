<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

{{-- head --}}
@include('admin.partial.head')

<body>

    <!--*******************
        Preloader start
    ********************-->
          
    <!--*******************
        Preloader end
    ********************-->
    
    <!--**********************************
        Navbar
    ***********************************-->
	   @include('admin.partial.navbar')
		
    <!--**********************************
        ChatBot
    ***********************************-->
        @include('admin.partial.chatbot')
		
	<!--**********************************
            Header start
    ***********************************-->
        @include('admin.partial.header')


        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.partial.sidebar')
        

        <!--**********************************
            Container
        ***********************************-->
        @yield('content')
        
        <!--**********************************
            Footer start
        ***********************************-->

        @include('admin.partial.footer.footer')
</body>
</html>