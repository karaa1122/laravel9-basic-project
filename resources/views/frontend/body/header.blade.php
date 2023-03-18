  
@php

$route = Route::current()->getName();
@endphp

   <header>
            <div id="sticky-header" class="menu__area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
    <div class="menu__wrap">
    <nav class="menu__nav">
    <div class="logo">
    <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/rash.png') }}" alt=""></a>
    <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/spi.png') }}" alt=""></a>
    </div>
    <div class="navbar__wrap main__menu d-none d-xl-flex">
    <ul class="navigation">

    <li class="{{ ($route == 'home')? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>

    <li class="{{ ($route == 'home.about')? 'active' : '' }}"><a href="{{ route('home.about') }}">About</a></li>


    <li class="{{ ($route == 'home.portfolio') ? 'active' : '' }}"><a href="{{ route('home.portfolio') }}">Portfolio</a>
         
    </li>    

    <li class="{{ ($route == 'home.blog') ? 'active' : '' }}"><a href="{{ route('home.blog') }}">My Blog</a>
        
    </li>

    </ul>
    </div>




    <div class="header__btn d-none d-md-block">

    </div>
    </nav>
    </div>
    <!-- Mobile Menu  -->
    <div class="mobile__menu">
    <nav class="menu__box">
    <div class="close__btn"><i class="fal fa-times"></i></div>
    <div class="nav-logo">
    <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png" alt=""></a>
    <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png" alt=""></a>
    </div>
    <div class="menu__outer">
    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    </div>
    <div class="social-links">
    <ul class="clearfix">


    </ul>
    </div>
    </nav>
    </div>
    <div class="menu__backdrop"></div>
    <!-- End Mobile Menu -->
    </div>
    </div>
    </div>
    </div>
    </header>