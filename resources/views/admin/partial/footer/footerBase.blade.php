<!--**********************************
            Footer start
***********************************-->


<!--**********************************
    Footer end
***********************************-->

</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script>
    var csrfToken =
        'u7zeYcQ+4CFpWXmx9XWrdCcwojmWHyjzM4nV6CTij2Rv0Aj7qEbHZT/NqRAYA9n3A1vBD2Ih0tkl4iHZ9UHTUrY2LNbUmFOAFAnECvcmEJYBsODaHYfuU1nhbZ2cJPQGD/TLIS016pM2OKM2ABjqvA==';
</script>
<script>
    var asset_base_url = 'index.html';
</script>
{{-- <script>
    const BASE_URL = 'https://jobick.dexignlab.com/cakephp/demo';
</script> --}}
<script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Page level css : Dashboard 1 -->
<script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('admin/vendor/chartjs/chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>
<!-- Page level Js : Dashboard  -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('admin/js/demo.js') }}"></script>
<script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>

<script>
    function JobickCarousel() {
        /*  testimonial one function by = owl.carousel.js') }}"*/
        jQuery('.front-view-slider').owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            autoWidth: true,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            animateOut: 'fadeOut',
            dots: false,
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1,

                    margin: 10
                },

                480: {
                    items: 1
                },

                767: {
                    items: 3
                },
                1750: {
                    items: 3
                }
            }
        })
    }
    jQuery(window).on('load', function() {
        setTimeout(function() {
            JobickCarousel();
        }, 1000);
    });
</script>
