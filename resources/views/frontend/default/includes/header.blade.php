{{-- LAPTOP VERSION  --}}

<section>
    <div class="v3-top-menu">
        <div class="container">
            <div class="row">
                <div class="v3-menu">
                    <div class="v3-m-1">
                        <a href="index-1.html"><img src="{{ asset('images/logo2.png') }}" alt=""> </a>
                    </div>
                    <div class="v3-m-2">
                        <ul>
                            <li><a class='dropdown-button ed-sub-menu' href='#' data-activates='drop-mega-menu'>Listing</a></li>
                            <li><a href="{{ route('pages.about.us') }}">About Us</a></li>
                            <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                            <li><a href="{{ route('pages.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="v3-m-3">
                        <div class="v3-top-ri v32-top-ri">
                            <ul>
                                <li><a href="{{ route('login') }}" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>
                                <li><a href="db-listing-add.html" class="v3-add-bus"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="all-drop-down-menu">
                    <!--END DROP DOWN MENU-->
                    <ul id='drop-mega-menu' class='dropdown-content'>
                        <li><a href="{{ route('listings.index') }}"><i class="fa fa-list-ul"></i> All Listing</a></li>
                        <li><a class='dropdown-button2 ed-sub-drop-menu' href='#' data-activates='dropdown2' data-hover="hover" data-alignm="left"><i class="fa fa-list-alt"></i>  Listing Details</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="add-listing.html"><i class="fa fa-plus"></i> Add Listing</a>
                        </li>
                    </ul>

                    <ul id='dropdown2' class='dropdown-content'>
                        <li><a href="listing-details.html">Listing Details </a> </li>
                        <li class="divider"></li>
                        <li><a class='dropdown-button2 ed-sub-drop-menu' href='#' data-activates='dropdown3' data-hover="hover" data-alignm="left"><i class="fa fa-list-alt"></i>Data</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="list-lead.html">Lead Listing</a>
                        </li>
                    </ul>

                    <ul id='dropdown3' class='dropdown-content'>
                        <li><a href="listing-details.html">Listing Details </a> </li>
                        <li class="divider"></li>
                        <li><a href="list-grid.html">Listing Grid View</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="list-lead.html">Lead Listing</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- MOBILE VERSION  --}}

<section>
    <div class="v3-mob-top-menu">
        <div class="container">
            <div class="row">
                <div class="v3-mob-menu">
                    <div class="v3-mob-m-1">
                        <a href="index-1.html"><img src="{{ asset('images/logo2.png') }}" alt=""> </a>
                    </div>
                    <div class="v3-mob-m-2">
                        <div class="v3-top-ri">
                            <ul>
                                <li><a href="login.html" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>
                                <li><a href="price.html" class="v3-add-bus"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </li>
                                <li><a href="#" class="ts-menu-5" id="v3-mob-menu-btn"><i class="fa fa-bars" aria-hidden="true"></i>Menu</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mob-right-nav" data-wow-duration="0.5s">
        <div class="mob-right-nav-close"><i class="fa fa-times" aria-hidden="true"></i> </div>
        <h5>Business</h5>
        <ul class="mob-menu-icon">
            <li><a href="price.html">Add Business</a> </li>
            <li><a href="#!" data-toggle="modal" data-target="#register">Register</a> </li>
            <li><a href="#!" data-toggle="modal" data-target="#sign-in">Sign In</a> </li>
        </ul>
        <h5>All Categories</h5>
        <ul>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Help Services</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Appliances Repair & Services</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Furniture Dealers</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Packers and Movers</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Pest Control </a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Solar Product Dealers</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Interior Designers</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Carpenters</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Plumbing Contractors</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Modular Kitchen</a> </li>
            <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Internet Service Providers</a> </li>
        </ul>
    </div>
</section>
