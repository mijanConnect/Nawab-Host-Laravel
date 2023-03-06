<!--=========================-->
<!--=        Header         =-->
<!--=========================-->
<header class="site-header">
    <div class="site-header__topbar">
        <div class="container">
            <div class="topbar-menu">
                <ul class="topbar-menu__contact">
                    <li class="topbar-menu__call">
                        <img src="media/header/call.svg" class="topbar-menu__call-icon" alt="call icon" />+88 01735 893941
                    </li>
                    <li class="topbar-menu__mail">
                        <img src="media/header/mail.svg" class="topbar-menu__mail-icon" alt="mail icon" />info@nawabhost.com
                    </li>
                </ul>
                <div class="topbar-menu__login-form-button">
                    <a href="{{ route('login') }}" class="topbar-menu__login">Login</a>
                    <p class="topbar-menu__devider">|</p>
                    <a href="{{ route('signup') }}" class="topbar-menu__sign-up">Registration</a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar bar-wrapper" id="navbar">
        <div class="container">
            <a href="{{ route('home') }}"><img class="navbar__logo" src="media/header/logo.svg" alt="Nawab Host Logo" /></a>
            <div class="nav navbar__menu-container">
                <svg class="close navbar__close-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M18.374 6.36182L6.37396 18.3618" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.37396 6.36182L18.374 18.3618" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="navbar__navbar-item">
                    <ul class="navbar__unorder-list">
                        <li class="navbar__list">
                            <a href="{{ route('home') }}" class="navbar__link">Home</a>
                        </li>
                        <li class="navbar__list">
                            <a href="{{ route('domain') }}" class="navbar__link">Domain</a>
                        </li>
                        <li class="navbar__list">
                            <a href="#" class="navbar__link">Hosting
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="#2C2D3D" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                            <div class="navbar__sub-menu">
                                <img src="media/header/submenu/polygon.svg" class="navbar__polygon-icon"
                                    alt="polygon icon">
                                <div class="navbar__sub-menu-content">
                                    <ul class="navbar__sub-menu-unorder-list">
                                        <a href="{{ route('cpanel') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/ssd-vps.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">cPanel Hosting</h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="{{ route('cloud-hosting') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/dedicated-servers.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">Extreme Shared
                                                        Hosting
                                                    </h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                    <ul class="navbar__sub-menu-unorder-list">
                                        <a href="{{ route('ssd-vps') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/vps-hosting.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">VPS Hosting</h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="{{ route('reseller-hosting') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/reseller-hosting.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">Reseller Hosting
                                                    </h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                    <div class="navbar__offer">
                                        <div class="navbar__offer-container">
                                            <h3 class="navbar__offer-amount">60% off</h3>
                                            <p class="navbar__offer-on">on</p>
                                            <p class="navbar__offer-item">Shared Hosting</p>
                                            <h4 class="navbar__offer-previus-price"><del>$19.99</del></h4>
                                            <h5 class="navbar__offer-price">$8.99</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar__list">
                            <a href="{{ route('reseller-hosting') }}" class="navbar__link">Reseller</a>
                        </li>
                        <li class="navbar__list">
                            <a href="#" class="navbar__link">Servers
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="#2C2D3D" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                            <div class="navbar__sub-menu">
                                <img src="media/header/submenu/polygon.svg" class="navbar__polygon-icon"
                                    alt="polygon icon">
                                <div class="navbar__sub-menu-content-second">
                                    <ul class="navbar__sub-menu-unorder-list">
                                        <a href="{{ route('ssd-vps') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/ssd-vps.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">SSD VPS</h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="{{ route('dedicated-server') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/dedicated-servers.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">Dedicated Servers
                                                    </h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                    <ul class="navbar__sub-menu-unorder-list">
                                        <a href="{{ route('ssd-vps') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/vps-hosting.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">VPS Hosting</h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                        <a href="{{ route('reseller-hosting') }}" class="navbar__sub-menu-link">
                                            <li class="navbar__sub-menu-list">
                                                <img src="media/header/submenu/reseller-hosting.svg"
                                                    class="navbar__sub-menu-list-icon" alt="icon">
                                                <div class="navbar__sub-menu-list-content">
                                                    <h5 class="navbar__sub-menu-list-header">Reseller Hosting
                                                    </h5>
                                                    <p class="navbar__sub-menu-list-description">Would you like
                                                        to host your website with a low-cost.
                                                    </p>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="navbar__list">
                            <a href="{{ route('help-support') }}" class="navbar__link">Help & Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar__icon">
                <a href="{{ route('search') }}"><img src="media/header/search.svg" class="navbar__search-icon"
                        alt="search icon" /></a>
                <a href="{{ route('cart') }}"><img src="media/header/cart.svg" class="navbar__cart-icon" alt="cart icon" /></a>
            </div>
            <svg class="menu navbar__menu-icon" width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="#2c2d3d" />
            </svg>
        </div>
    </nav>
</header>