<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="KeQEVwy1BBIT4hgZTxLSsAkY1P13ogZqtWbGo0k1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Edmin - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="https://larathemes.pixelstrap.com/edmin/assets/images/favicon/favicon.png"
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
        var baseUrl = "https://larathemes.pixelstrap.com/edmin/";
    </script> <!-- Font awesome icon css -->
    <!-- Font awesome icon css -->
    <link rel="stylesheet"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css">

    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/@icon/icofont/icofont.css">

    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/flag-icon.css">

    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/datatables.css">

    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/themify-icons/themify-icons/css/themify.css">

    <!-- Animation css -->
    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/animate.css/animate.css">

    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/weather-icons/css/weather-icons.min.css">

    <!-- App css-->
    <link rel="preload" as="style"
        href="https://larathemes.pixelstrap.com/edmin/build/assets/style-BQ9xLEwC.css" />
    <link rel="stylesheet" href="https://larathemes.pixelstrap.com/edmin/build/assets/style-BQ9xLEwC.css"
        data-navigate-track="reload" />
    <link id="color" rel="stylesheet" href="https://larathemes.pixelstrap.com/edmin/assets/css/color-1.css"
        media="screen">

    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css"
        href="https://larathemes.pixelstrap.com/edmin/assets/css/vendors/toastr.min.css">
</head>

<body>

    @include('admin_pannel.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        @include('admin_pannel.sidebar')

        <div class="page-body">
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-sm-6">
                        <h3>Location</h3>
                    </div>
                    <div class="col-sm-6">
                        <nav>
                            <ol class="breadcrumb justify-content-sm-end align-items-center">
                                <li class="breadcrumb-item"> <a href="#">
                                        <svg class="svg-color">
                                            <use
                                                href="https://larathemes.pixelstrap.com/edmin/assets/svg/iconly-sprite.svg#Home">
                                            </use>
                                        </svg></a></li>
                                <li class="breadcrumb-item active">Location</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Zero Configuration  Starts-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"> <a href="#"><i
                                                                    class="icon-pencil-alt"></i></a>
                                                        </li>
                                                        <li class="delete"><a href="#"><i
                                                                    class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Zero Configuration  Ends-->
                </div>
                <!-- Scroll - vertical dynamic Ends-->
            </div>
            <!-- Container-fluid starts-->
        </div>

        @include('admin_pannel.footer')
    </div>
    </main>


    <!-- jquery-->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/vendors/jquery/dist/jquery.min.js"></script>

    <!-- bootstrap js-->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/config.js"></script>

    <!-- Sidebar js-->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/sidebar.js"></script>

    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/datatable/datatables/datatable.custom.js"></script>

    <!-- scrollbar js-->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/scrollbar/simplebar.js"></script>
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/scrollbar/custom.js"></script>
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/select2/select2.full.min.js"></script>

    <!-- validation -->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/jquery.validate.min.js"></script>

    <!-- customizer-->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/theme-customizer/customizer.js"></script>

    <!-- toastr -->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/toastr.min.js"></script>

    <!-- custom script -->
    <script src="https://larathemes.pixelstrap.com/edmin/assets/js/script.js"></script>


    <script>
        $(document).ready(function() {
            $('.toastr-message').each(function() {
                var messageType = $(this).data('type');
                var messageText = $(this).text();
                toastr.options = {
                    "closeButton": false,
                    "progressBar": true,
                    "extendedTimeOut": 0,
                    "timeOut": 0,
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


</body>

</html>
