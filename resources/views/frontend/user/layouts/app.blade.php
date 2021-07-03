@extends('frontend.default.layouts.app')
@section('content')
<section>
    <div class="tz">
        <!--LEFT SECTION-->
        @include('frontend.user.includes.left-sidebar')

        <!--CENTER SECTION-->
        <main>
            @yield('main')
        </main>

        <!--RIGHT SECTION-->
       @include('frontend.user.includes.right-sidebar')
    </div>
</section>
<!--END DASHBOARD-->
@endsection
