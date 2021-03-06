@extends('frontend.default.layouts.app')
@section('content')
<section class="inn-page-bg">
    <div class="container">
        <div class="row">
            <div class="inn-pag-ban">
                <h2>About Us</h2>
                <h5>Grow your business by getting relevant and verified leads</h5> </div>
        </div>
    </div>
</section>
<section class="p-about com-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="page-about pad-bot-red-40">
                    <h3>Hi! Welcome to Local Directory</h3> <span>Local directory is the smartest way to find the best services for all your works</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> <a class="waves-effect waves-light btn-large full-btn" href="#!">Add my business</a> </div>
            </div>
            <div class="col-md-6">
                <div class="page-about"> <img src="{{ asset('images/about.jpg') }}" alt="" /> </div>
            </div>
        </div>
    </div>
</section>
<section class="p-about-count">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 page-about-count">
                <div> <span>48</span>
                    <h4>Countries</h4>
                    <p>Local directory is the smartest way to find the best services</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 page-about-count">
                <div> <span>3k</span>
                    <h4>cities</h4>
                    <p>Local directory is the smartest way to find the best services</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 page-about-count">
                <div> <span>5k</span>
                    <h4>Business</h4>
                    <p>Local directory is the smartest way to find the best services</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 page-about-count">
                <div> <span>6k</span>
                    <h4>Users</h4>
                    <p>Local directory is the smartest way to find the best services</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 page-about-count">
                <div> <span>20k</span>
                    <h4>Reviews</h4>
                    <p>Local directory is the smartest way to find the best services</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 page-about-count page-about-count-no-bor">
                <div> <span>50k</span>
                    <h4>Visiters</h4>
                    <p>Local directory is the smartest way to find the best services</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dir-pa-sp-top-bg">
    <div class="container">
        <div class="row com-padd">
            <div class="col-md-6">
                <div class="how-border how-com-mob-bot-space">
                    <div class="hom-cre-acc-left">
                        <h3><span>For Visitors</span></h3>
                        <p>Local directory is the smartest way to find the <b>best services</b>
                            <br>for all your works</p>
                    </div>
                    <div class="how-com">
                        <ul>
                            <li> <img src="{{ asset('images/how/1.png') }}" alt="">
                                <h4>Choose Service</h4>
                                <p>from over 60 Services to help you out in your works. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </li>
                            <li> <img src="{{ asset('images/how/2.png') }}" alt="">
                                <h4>Get 1000+ Trusted Service</h4>
                                <p>from over 60 Services to help you out in your works. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </li>
                            <li> <img src="{{ asset('images/how/3.png') }}" alt="">
                                <h4>Success your Service</h4>
                                <p>from over 60 Services to help you out in your works. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-border">
                    <div class="hom-cre-acc-left">
                        <h3><span>For Business Owners</span></h3>
                        <p>You can grow your business online and <b>Get more leads</b>
                            <br>for your business</p>
                    </div>
                    <div class="how-com">
                        <ul>
                            <li> <img src="{{ asset('images/how/4.png') }}" alt="">
                                <h4>Register your Business</h4>
                                <p>from over 60 Services to help you out in your works. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </li>
                            <li> <img src="{{ asset('images/how/5.png') }}" alt="">
                                <h4>Get 1000+ Leads and Visitors</h4>
                                <p>from over 60 Services to help you out in your works. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </li>
                            <li> <img src="{{ asset('images/how/6.png') }}" alt="">
                                <h4>Grow your Business</h4>
                                <p>from over 60 Services to help you out in your works. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MOBILE APP-->
<section class="web-app com-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6 web-app-img"> <img src="{{ asset('images/mobile.png') }}" alt="" /> </div>
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
                <a href="#"><img src="{{ asset('images/android.png') }}" alt="" /> </a>
                <a href="#"><img src="{{ asset('images/apple.png') }}" alt="" /> </a>
            </div>
        </div>
    </div>
</section>
@endsection
