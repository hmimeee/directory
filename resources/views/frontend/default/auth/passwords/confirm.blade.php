@extends('frontend.default.layouts.app')
@section('content')
<section class="tz-register">
    <div class="log-in-pop">
        <div class="log-in-pop-left">
            <h1>Hello... <span></span></h1>
            <p>Don't have an account? Create your account. It's take less then a minutes</p>
            <h4>Login with social media</h4>
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
                <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
            </ul>
        </div>

        <div class="log-in-pop-right">
            <h4>Confirm Password</h4>
            <p>Please confirm your password before continuing.</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="input-field s12">
                    <input type="password" class="form-control" name="password" required autocomplete="current-password">
                    @error('password')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="mt-5 mb-3">
                    <button type="submit" class="btn btn-primary">Confirm Password</button>
                </div>
                <a class="btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>            </form>
        </div>
    </div>
</section>

<section class="web-app com-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6 web-app-img"> <img src="images/mobile.png" alt="" /> </div>
            <div class="col-md-6 web-app-con">
                <h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Find nearby listings</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Easy service enquiry</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Listing reviews and ratings</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Manage your listing, enquiry and reviews</li>
                </ul> <span>We'll send you a link, open it on your phone to download the app</span>
                <form>
                    <ul>
                        <li>
                            <input type="text" placeholder="+01" /> </li>
                        <li>
                            <input type="number" placeholder="Enter mobile number" /> </li>
                        <li>
                            <input type="submit" value="Get App Link" /> </li>
                    </ul>
                </form>
                <a href="#"><img src="images/android.png" alt="" /> </a>
                <a href="#"><img src="images/apple.png" alt="" /> </a>
            </div>
        </div>
    </div>
</section>
@endsection
