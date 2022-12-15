<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VAS & NB Portal | Partner Registration</title>
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
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="auth-form">
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 brand-logo">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                                </div>
                                <div class="flex-grow-1 ms-3 text-end">
                                    <h4 class="mt-3 m-b-5 text-welcome">Robi VAS & NB Portal</h4>
                                    <p class="text-muted">Register as Partner</p>
                                </div>
                            </div>
                            <form class="pt-3" method="POST" action="{{ route('register.perform') }}">
                                @csrf


                                <div class="form-group">
                                    <label for="">Account Email:</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                    @error('email')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Username:</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                    @error('username')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="password">
                                    @error('password')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="password confirmation">
                                    @error('password confirmation')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-red btn-block">Register As Partner</button>
                                </div>
                            </form>
                            <div class="text-center mt-15">
                                <p>
                                    <span>Already have an account? </span><a href="{{ route('login.show') }}"
                                        class="auth-link">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
