<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage1 header header-sticky " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href={{ route('root') }}><img src="/img/logo/logo1.png" alt=""></a>
                        </div>
                        <div class="btn-area d-lg-flex">

                            @if (isset($preview))
                                <a href="#" class="vl-btn1 d-md-block d-none">PURCHASE NOW <span><img src="/img/icons/purchase.svg" alt=""></span></a>
                                <button class="hamburger_menu d-md-none d-block"><img src="/img/icons/bars-icons1.svg" alt=""></button>
                            @else
                                <div class="theme-toggle-container">
                                    <label class="theme-switch">
                                        <input type="checkbox" id="theme-toggle">
                                        <span class="slider">
                                            <i class="fas fa-moon icon moon-icon"></i>
                                            <i class="fas fa-sun icon sun-icon"></i>
                                        </span>
                                    </label>
                                </div>
                                <a href="#" class="vl-btn1">SPONSOR ME <span><img src="/img/icons/mail1.svg" alt=""></span></a>
                                <button class="hamburger_menu"><img src="/img/icons/bars-icons1.svg" alt=""></button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->
