@include('admin_pannel.partials.head')

@section('title', 'Login')

<body>
    <!-- tap on top starts-->
    <div class="tap-top">
        <svg class="feather">
            <use
                href="{{ asset('assets/admin_pannel/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up') }}">
            </use>
        </svg>
    </div>

    <!-- tap on tapS ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper
                compact-wrapper" id="pageWrapper">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="login-card login-dark">
                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif

                        <div>
                            <div><a class="logo" href="#"><img class="img-fluid for-light"
                                        src="{{ asset('storage/logos/logo-dark.png') }}" alt="looginpage"><img
                                        class="img-fluid for-dark m-auto"
                                        src="{{ asset('storage/logos/logo-dark.png') }}" alt="logo"></a></div>
                            <div class="login-main">
                                <form class="theme-form" method="POST" action="{{ route('loginUser') }}">
                                    @csrf
                                    <h2 class="text-center">Sign in to account</h2>
                                    <p class="text-center">Enter your email &amp; password to login</p>

                                    <div class="form-group">
                                        <label class="col-form-label">Email Address</label>
                                        <input class="form-control " name="email" type="email"
                                            value="{{ old('email') }}" required placeholder="Test@gmail.com"
                                            autocomplete="email" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control " type="password" name="password"
                                                value="{{ old('password') }}" required placeholder="*********"
                                                autocomplete="current-password">
                                            <div class="show-hide"><span class="show"> </span></div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 checkbox-checked">
                                        <a class="form-check checkbox-solid-info"
                                            href="#">Forgot
                                            password?</a>
                                        <div class="text-end mt-3">
                                            <button class="btn btn-primary btn-block w-100 text-white"
                                                type="submit">Sign
                                                in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>
