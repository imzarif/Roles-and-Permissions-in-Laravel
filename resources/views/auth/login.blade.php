<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VAS & NB Portal | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-10 col-md-6 col-lg-4 mx-auto">
                        <div class="auth-form">
                            <div class="d-flex mb-5">
                                <div class="flex-shrink-0 brand-logo">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                                </div>
                                <div class="flex-grow-1 ms-3 text-end">
                                    <h4 class="mt-3 m-b-5 text-welcome">Robi VAS & NB Portal</h4>
                                    <p class="text-muted">Login to your Account</p>
                                </div>
                            </div>

                            {{-- <div class="mt-3">
                                <a href="{{ route('azure.login') }}" class="btn btn-red btn-block">
                                    Login with AD (Robi user only)
                                </a>
                            </div> --}}
                            <div class="separator-or-line"></div>
                            <form class="pt-3" method="POST" action="{{ route('login.perform') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Email"
                                        value="{{ old('username') }}">
                                    @error('username')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}"
                                        placeholder="password">
                                    @if ($errors->has('password'))
                                        <p class="error">{{ $message }}</p>
                                    @endif
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-red btn-block">Login as Partner</button>
                                </div>
                            </form>
                            <div class="text-center mt-15">
                                <p class="mt-15">
                                    <span clss="mr-15">Not a Partner?</span> <a href="{{ route('register.show') }}"
                                        class="auth-link">Sign Up As Partner</a>
                                </p>
                            </div>
                        </div>
                        <div class="text-center mt-3 text-black privacy-policy-buttons">
                            <a href="https://www.robi.com.bd/en/personal/privacy-notice" class="auth-link" target="_blank">Privacy Policy</a> |
                            <a href="https://www.robi.com.bd/en/personal/cookies-policy" class="auth-link" target="_blank">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
