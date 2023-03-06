<x-master title="Domain">
<x-header/>
    <!--=========================-->
    <!--=     Hero Domain       =-->
    <!--=========================-->
    <section class="hero-domain">
        <div class="hero-domain__image">
            <div class="hero-domain__content">
                <div class="hero-domain__home-content">
                    <h1 class="hero-domain__heading wow fadeInUp" data-wow-delay=".2s">Domain Names Registrations</h1>
                    <p class="hero-domain__paragraph wow fadeInUp" data-wow-delay=".3s">A name to introduce your brand or product to the world.</p>
                </div>
                <div class="hero-domain__search-area wow fadeInUp" data-wow-delay=".4s">
                    <form class="hero-domain__wrap mx-auto my-auto" method="post" action="https://my.nawabhost.com/cart.php?a=add&domain=register&currency={{ currency() }}">
                        <div class="hero-domain__search">
                            <input type="text" class="hero-domain__searchTerm" placeholder="domain">
                            <select class="form-select hero-domain__domain-select" aria-label="Default select example">
                                <option class="hero-domain__domamin-select-option" selected>.com</option>
                                <option class="hero-domain__domamin-select-option" value="1">.me</option>
                                <option class="hero-domain__domamin-select-option" value="2">.net</option>
                                <option class="hero-domain__domamin-select-option" value="3">.info</option>
                            </select>
                            <button type="submit" class="hero-domain__searchButton">
                                Search
                            </button>
                        </div>
                    </form>
                    <div class="hero-domain__domain-name">
                        @foreach(($pricing['pricing']) as $tld => $domain)
                        @if($tld == 'com' || $tld == 'net' || $tld == 'co' || $tld == 'org' || $tld == 'info' || $tld == 'me')
                        @php
                            $price = money((array_values($domain['register'])[0]), currency(true)) . $pricing['currency']['suffix'];
                            $offered_price = money((array_values($domain['register'])[0])*(100-25)/100, currency(true));
                        @endphp
                        <div class="hero-domain__{{ $tld }}">
                            <h3 class="hero-domain__{{ $tld }}-header">
                                .<span class="hero-domain__{{ $tld }}-span">{{ $tld }}</span>
                            </h3>
                            <p>{{ $offered_price . $pricing['currency']['suffix'] }} <span>/year</span></p>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========================-->
    <!--=   Discover Domain     =-->
    <!--=========================-->
    <section class="discover-domainName">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="discover-domainName__title wow fadeInUp" data-wow-delay=".2s">
                        Discover a Huge Variety of Domains
                    </h2>
                    <!-- /.nawab-exclusive-service__title -->
                    <p class="discover-domainName__description wow fadeInUp" data-wow-delay=".3s">
                        Get the best website hosting plans and make your dreams a reality.
                    </p>
                    <!-- /.discover-domainName__description -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row wow fadeInUp" data-wow-delay=".4s">
                @foreach(($pricing['pricing']) as $tld => $domain)
                @if($tld == 'com' || $tld == 'net' || $tld == 'me' || $tld == 'info' || $tld == 'xyz' || $tld == 'org' || $tld == 'design' || $tld == 'us')
                @php
                    $price = money((array_values($domain['register'])[0]), currency(true)) . $pricing['currency']['suffix'];
                    $offer = array_values($domain['register'])[0]*(100-25)/100;
                    $offered_price = money($offer);
                    $save = money(array_values($domain['register'])[0]-$offer) . $pricing['currency']['suffix'];
                @endphp
                <div class="col-sm-6 mb-4 col-md-6 col-lg-4 col-xl-3">
                    <div class="discover-domainName__box">
                        <div class="domain-img">
                            <img src="media/discover-domain/{{$tld}}.png" alt="com">
                        </div>
                        <p class="discover-domainName__dec">
                            Build trust with this recognized domain
                        </p>
                        <div class="discover-domainName__cupon-btn">
                            <a href="#">Save {{ $save }}</a>
                        </div>
                        <div class="discover-domainName__offers">
                            <p class="discount-price">
                                {{ $offered_price }}<span class="discount-amount">{{ $price }}</span>
                            </p>
                            <a href="https://my.nawabhost.com/cart.php?a=add&domain=register&currency={{ currency() }}" class="discover-domainName__getoffer-btn">
                                Get Offer<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <!-- /.row -->
            <div class="discover-domainName__plan-content text-center">
                <a href="#domain-search" class="discover-domainName__plan-button">View All Plan</a>
            </div>

        </div>
        <!-- /.container -->
    </section>
    <!-- /.discover-domainname -->

    <!--=========================-->
    <!--=         Plan          =-->
    <!--=========================-->
    <section class="plan">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="plan__heading wow fadeInUp" data-wow-delay=".2s">Included With Every Plan</h2>
                </div>
            </div>
            <!-- /.row -->
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Free Email Forwarding</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <!-- /.col-md-4 mb-4 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Set Up Multiple Website</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <!-- /.col-md-4 mb-4 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">24/7 Customer Support</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <!-- /.col-md-4 mb-4 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">

                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Full Control Your Domain</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <!-- /.col-md-4 mb-4 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Free Google Ads Voucher</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Unlimited Subdomains</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Unlimited Subdomains</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">Domain Parking</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <!-- /.col-md-4 mb-4 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="plan__box">
                        <div class="plan__content">
                            <div class="plan-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="plan__details">
                                <h4 class="plan__title">30-day Money Back Guarantee</h4>
                                <p class="plan__dec">
                                    Fully scalable, flexible, and far more robust and featurerich than previous
                                    versions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.plan__box -->
                </div>
                <!-- /.col-md-4 mb-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.plan -->

    <!--=========================-->
    <!--=    Call to action     =-->
    <!--=========================-->
    <x-call-to-action/>

    <!--=========================-->
    <!--=          FAQ          =-->
    <!--=========================-->
    <x-faq/>

    <!--=========================-->
    <!--=        Service        =-->
    <!--=========================-->
    <x-service/>
    
<x-footer/>
</x-master>