@include('admin_pannel.partials.head')
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
    {{-- <script src="{{ asset('assets/admin_pannel/edmin/assets/js/theme-customizer/customizer.js') }}"></script> --}}

    <!-- toastr -->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/toastr.min.js') }}"></script>

    <!-- custom script -->
    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/script.js') }}"></script>


    <script src="{{ asset('assets/admin_pannel/edmin/assets/js/password.js') }}"></script>

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
