<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>@yield('title', 'Admin Panel')</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('assets/admin_pannel/edmin/assets/images/favicon/favicon.png') }}"
        type="image/x-icon">
    <link rel="shortcut icon" href="https://larathemes.pixelstrap.com/edmin/assets/images/favicon/favicon.png"
        type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <script>
        // var baseUrl = "https://larathemes.pixelstrap.com/edmin/";
        var baseUrl = "{{ asset('') }}";
    </script> <!-- Font awesome icon css -->
    <!-- Font awesome icon css -->

    <link rel="stylesheet"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css') }}">

    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/@icon/icofont/icofont.css') }}">

    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/flag-icon.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/datatables.css') }}">

    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/themify-icons/themify-icons/css/themify.css') }}">

    <!-- Animation css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/animate.css/animate.css') }}">

    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/weather-icons/css/weather-icons.min.css') }}">


    <!-- App css-->
    <link rel="preload" as="style"
        href="{{ asset('assets/admin_pannel/edmin/build/assets/style-BQ9xLEwC.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/build/assets/style-BQ9xLEwC.css') }}"
        data-navigate-track="reload" />
    <link id="color" rel="stylesheet" href="{{ asset('assets/admin_pannel/edmin/assets/css/color-1.css') }}"
        media="screen">

    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin_pannel/edmin/assets/css/vendors/toastr.min.css') }}">
</head>

<body>

    @include('admin_pannel.partials.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        @include('admin_pannel.partials.sidebar')

        <div class="page-body">
            @yield('content')
        </div>

        @include('admin_pannel.partials.footer')
    </div>
    </main>


    <!-- jquery-->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- bootstrap js-->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min') }}.js">
    </script>
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/config.js') }}"></script>

    <!-- Sidebar js-->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/sidebar.js') }}"></script>

    <!-- SweetAlerts js -->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/sweetalert/sweetalert2.min.js"></script>
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/sweetalert/sweetalert-custom.js"></script>

    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/datatable/datatables/datatable.custom.js') }}"></script>

    <!-- scrollbar js-->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/select2/select2.full.min.js') }}"></script>

    <!-- validation -->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/jquery.validate.min.js') }}"></script>

    <!-- customizer round -->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/theme-customizer/customizer.js') }}"></script>

    <!-- toastr -->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/toastr.min.js') }}"></script>

    <!-- custom script -->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/script.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('.toastr-message').each(function() {
                var messageType = $(this).data('type');
                var messageText = $(this).text();
                toastr.options = {
                    "closeButton": false,
                    "progressBar": true,
                    "extendedTimeOut": 3000,
                    "timeOut": 1000,
                };

                switch (messageType) {
                    case 'success':
                        toastr.success(messageText);
                        break;
                    case 'error':
                        toastr.error(messageText);
                        break;
                    case 'info':
                        toastr.info(messageText);
                        break;
                    case 'warning':
                        toastr.warning(messageText);
                        break;
                    default:
                        toastr.info(messageText);
                }
            });
        });
    </script>
    <script>
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    @yield('script')

</body>

</html>
