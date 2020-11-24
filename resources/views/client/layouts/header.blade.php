<link href="{{ mix('fonts/font-awe.css')}}" rel="stylesheet">
        </div>
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1><a class="navbar-brand mr-lg-5" href="index.html">
            Booking tours
          </a></h1>

            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"> @lang('language.tourincountry')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">@lang('language.touroutcountry')</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm">@lang('language.signin')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">@lang('language.signup')</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link"href="{!! route('user.change-language', ['en']) !!}">en</a>
                      
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link" href="{!! route('user.change-language', ['vi']) !!}"> vi</a>
                    </li>
                    
            </div>
       
            <!-- toggle switch for light and dark theme -->
       @include('client.layouts.dark')
        </nav>
    </div>
</header>

<!-- modal login -->

@include('client.pages.login')

<!-- modal register -->

@include('client.pages.register')

