<head>
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link href="{{ asset('admin/images/favicon.png') }}" type="" rel="icon">
    <link href="{{ asset('admin/images/favicon.png') }}" type="" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css') }}">
    <!-- Page level css : Dashboard  -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/owl-carousel/owl.carousel.css') }}">
    <!-- End Page level css : Dashboard  -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" class="main-css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
</head>
