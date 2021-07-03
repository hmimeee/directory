@extends('frontend.default.layouts.app')
@section('content')
<section class="inn-page-bg">
    <div class="container">
        <div class="row">
            <div class="inn-pag-ban">
                <h2>Blog and Articles</h2>
                <h5>Grow your business by getting relevant and verified leads</h5> </div>
        </div>
    </div>
</section>
<section class="p-about com-padd">
    <div class="container">
        <div class="row blog-single">
            <div class="col-md-4">
                <div class="blog-img"> <img src="images/services/20.jpg" alt="" /> </div>
            </div>
            <div class="col-md-8">
                <div class="page-blog">
                    <h3>Top 10 best resorts in london, england</h3> <span>November 10, 2017</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> <a class="waves-effect waves-light btn-large full-btn" href="{{ route('blogs.show','slug') }}">Read More</a> </div>
            </div>
        </div>
        <div class="row blog-single">
            <div class="col-md-4">
                <div class="blog-img"> <img src="images/services/7.jpg" alt="" /> </div>
            </div>
            <div class="col-md-8">
                <div class="page-blog">
                    <h3>Building & Construction Service Providers</h3> <span>May 21, 2017</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> <a class="waves-effect waves-light btn-large full-btn" href="{{ route('blogs.show','slug') }}">Read More</a> </div>
            </div>
        </div>
        <div class="row blog-single">
            <div class="col-md-4">
                <div class="blog-img"> <img src="images/services/9.jpg" alt="" /> </div>
            </div>
            <div class="col-md-8">
                <div class="page-blog">
                    <h3>Top export products from Canada</h3> <span>April 18, 2017</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> <a class="waves-effect waves-light btn-large full-btn" href="{{ route('blogs.show','slug') }}">Read More</a> </div>
            </div>
        </div>
        <div class="row blog-single">
            <div class="col-md-4">
                <div class="blog-img"> <img src="images/services/10.jpg" alt="" /> </div>
            </div>
            <div class="col-md-8">
                <div class="page-blog">
                    <h3>Grand opening operation research center</h3> <span>November 10, 2017</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> <a class="waves-effect waves-light btn-large full-btn" href="{{ route('blogs.show','slug') }}">Read More</a> </div>
            </div>
        </div>
        <div class="row blog-single">
            <div class="col-md-4">
                <div class="blog-img"> <img src="images/services/15.jpg" alt="" /> </div>
            </div>
            <div class="col-md-8">
                <div class="page-blog">
                    <h3>How to make healthy veg salad at home</h3> <span>February 10, 2017</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> <a class="waves-effect waves-light btn-large full-btn" href="{{ route('blogs.show','slug') }}">Read More</a> </div>
            </div>
        </div>
        <div class="row blog-single con-com-mar-bot-o">
            <div class="col-md-4">
                <div class="blog-img"> <img src="images/services/11.jpg" alt="" /> </div>
            </div>
            <div class="col-md-8">
                <div class="page-blog">
                    <h3>Fast construction techniques</h3> <span>March 08, 2017</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p> <a class="waves-effect waves-light btn-large full-btn" href="{{ route('blogs.show','slug') }}">Read More</a> </div>
            </div>
        </div>
    </div>
</section>
<!--MOBILE APP-->
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
