<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex,nofollow" />
    <title>DMS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png" />
    <link href="{{ url('public/assets/backend/dist/css/style.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                    stroke="#fec80e" stroke-width="2"></path>
                <path
                    d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                    stroke="#fec80e" stroke-width="2"></path>
                <path id="teabag" fill="#fec80e" fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
                </path>
                <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" stroke="#fec80e"></path>
                <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#fec80e"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="auth-wrapper d-flex  no-block justify-content-center align-items-center"
            style="background: url({{ url('public/assets/backend/assets/images/big/auth-bg.jpg') }}) no-repeat center center;   background-size: cover;  ">
            <div class="auth-box p-4 card1 rounded">
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3">Login In</h3>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material" id="loginform" method="POST"
                                action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" type="text" required=""
                                            placeholder="Email":value="__('Email')" name="email" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" type="password" required=""
                                            placeholder="Password" name="password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="checkbox checkbox-info pt-0">
                                            <input id="checkbox-signup" type="checkbox"
                                                class="material-inputs chk-col-indigo" />
                                            <label for="checkbox-signup"><span
                                                    style="color: #fff;">{{ __('Remember me') }}</span></label>
                                        </div>
                                        <div class="ms-auto">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    href="{{ route('password.request') }}">
                                                    <span style="color: #fff;">{{ __('Forgot pwd?') }}</span>

                                                </a>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group text-center mt-4 mb-3">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary d-block w-100 waves-effect waves-light"
                                            type="submit">
                                            {{ __('Log in') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-4">
                                    <div class="col-sm-12 justify-content-center d-flex">
                                        <p>
                                            <span style="color: #fff;"> Don't have an account?</span>
                                            <a href="" class="text-primary font-weight-medium ms-1">Sign Up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ url('public/assets/backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ url('public/assets/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

        <script>
            $(".preloader").fadeOut();
            $("#to-recover").on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
        </script>
</body>

</html>
