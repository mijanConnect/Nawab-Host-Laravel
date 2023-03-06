<x-master>
<x-header/>

<!--=========================-->
<!--=         Hero          =-->
<!--=========================-->
<x-hero/>
    <!--=========================-->
    <!--=     Domain Search     =-->
    <!--=========================-->
    <section class="domain-search" id="domain-search">
        <div class="domain-search__overlay"></div>
        <div class="container">
            <div class="domain-search__content">
                <div class="domain-search__section-heading">
                    <h2 class="domain-search__section-title wow fadeInUp" data-wow-delay="0.05s">
                        Buy a Domain and Turn Your<br />Business Online.
                    </h2>
                </div>
                <form class="hero-domain__wrap mx-auto my-auto  wow fadeInUp" data-wow-delay="0.10s" method="post" action="https://my.nawabhost.com/cart.php?a=add&domain=register&currency={{ currency() }}">
                    <div class="domain-search__search">
                        <input type="text" class="domain-search__searchTerm" placeholder="domain">
                        <select class="form-select domain-search__domain-select" aria-label="Default select example">
                            <option class="domain-search__domamin-select-option" selected>.com</option>
                            <option class="domain-search__domamin-select-option" value="1">.me</option>
                            <option class="domain-search__domamin-select-option" value="2">.net</option>
                            <option class="domain-search__domamin-select-option" value="3">.info</option>
                        </select>
                        <button type="submit" class="domain-search__searchButton">
                            Search
                        </button>
                    </div>
                </form>
                <div class="hero-domain__domain-name  wow fadeInUp" data-wow-delay="0.15s">
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
    </section>

    <!--=========================-->
    <!--=   Exclusive Service   =-->
    <!--=========================-->
    <section class="nawab-exclusive-service">
        <div class="container">
            <div class="section-heading">
                <h2 class="nawab-exclusive-service__section-title wow fadeInUp" data-wow-delay=".05s">
                    Exclusive service
                </h2>
                <p class="nawab-exclusive-service__section-description wow fadeInUp" data-wow-delay=".10s">
                    Get the best website hosting plans and make your dreams a reality.
                </p>
            </div>
            <div class="row wow fadeInUp" data-wow-delay=".15s">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="nawab-exclusive-service__box">
                        <div class="nawab-exclusive-service__box-icon">
                            <img src="media/exclusive-service/cpanel.svg" alt="cpanel icon" />
                        </div>
                        <div class="nawab-exclusive-service__box-content">
                            <h3 class="nawab-exclusive-service__box-title">
                                cPannel Hosting
                            </h3>
                            <p class="nawab-exclusive-service__box-description">
                                Would you like to host your website with a low-cost, and reliable service.
                            </p>
                            <a href="#" class="nawab-exclusive-service__box-link">Learn More
                                <svg class="nawab-exclusive-service__arrow-icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M1 6H11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1L11 6L6 11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="nawab-exclusive-service__box">
                        <div class="nawab-exclusive-service__box-icon">
                            <img src="media/exclusive-service/vps.svg" alt="vps icon" />
                        </div>
                        <div class="nawab-exclusive-service__box-content">
                            <h3 class="nawab-exclusive-service__box-title">
                                VPS Hosting
                            </h3>
                            <p class="nawab-exclusive-service__box-description">
                                Fully scalable, flexible, and far more robust and feature-rich than previous versions.
                            </p>
                            <a href="#" class="nawab-exclusive-service__box-link">Learn More
                                <svg class="nawab-exclusive-service__arrow-icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M1 6H11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1L11 6L6 11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="nawab-exclusive-service__box">
                        <div class="nawab-exclusive-service__box-icon">
                            <img src="media/exclusive-service/shared.svg" alt="shared icon" />
                        </div>
                        <div class="nawab-exclusive-service__box-content">
                            <h3 class="nawab-exclusive-service__box-title">
                                Shared Hosting
                            </h3>
                            <p class="nawab-exclusive-service__box-description">
                                Cost-effective web hosting solution for everyone. It's simple to maintain.
                            </p>
                            <a href="#" class="nawab-exclusive-service__box-link">Learn More
                                <svg class="nawab-exclusive-service__arrow-icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M1 6H11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1L11 6L6 11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="nawab-exclusive-service__box">
                        <div class="nawab-exclusive-service__box-icon">
                            <img src="media/exclusive-service/reseller.svg" alt="reseller icon" />
                        </div>
                        <div class="nawab-exclusive-service__box-content">
                            <h3 class="nawab-exclusive-service__box-title">
                                Reseller Hosting
                            </h3>
                            <p class="nawab-exclusive-service__box-description">
                                Ideal for webmasters or those looking to launch a web hosting business.
                            </p>
                            <a href="#" class="nawab-exclusive-service__box-link">Learn More
                                <svg class="nawab-exclusive-service__arrow-icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M1 6H11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 1L11 6L6 11" stroke="#80818B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========================-->
    <!--=   Call to action   =-->
    <!--=========================-->
    <x-call-to-action/>

    <!--=========================-->
    <!--=   Pricing   =-->
    <!--=========================-->
    <section class="nawab-pricing">
        <div class="container">
            <div class="nawab-pricing__section-heading">
                <h2 class="nawab-pricing__section-title wow fadeInUp" data-wow-delay=".10s">
                    Our Flexible Pricing Plan
                </h2>
                <p class="nawab-pricing__section-description wow fadeInUp" data-wow-delay=".15s">
                    Get the best website hosting plans and make your dreams a reality.
                </p>
            </div>
            <div class="row wow fadeInUp" data-wow-delay=".20s">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="nawab-pricing__box">
                        <div class="nawab-pricing__box-header">
                            <div class="nawab-pricing__box-icon">
                                <img src="media/pricing/cloud-computing.svg" alt="" />
                            </div>
                            <h3 class="nawab-pricing__box-title">
                                cPanel Hosting
                            </h3>
                            <div class="nawab-pricing__box-price">
                                @php
                                    $cpanel = $products->where('pid', 3);
                                    $first = $cpanel->first();
                                    $pricing = $first['pricing'][currency(true)];
                                @endphp
                                <span class="nawab-pricing__box-price-amount">{{ money($pricing['monthly'], currency(true)) . $pricing['suffix'] }}</span>
                                <span class="nawab-pricing__box-price-duration">/year</span>
                            </div>
                        </div>
                        @php
                            $description = $first['description'];
                            $descByList = array_map(function($line) {
                                $parts = explode(':', $line, 2);
                                $value = trim($parts[1]);
                                $subject = trim($parts[0]);
                                return "<strong>$value</strong> $subject";
                            }, explode(PHP_EOL, $description));
                        @endphp
                        <ul class="nawab-pricing__box-feature">
                            @foreach($descByList as $line)
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />{!! $line !!}
                            </li>
                            @endforeach
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />Powered by cPanel®
                            </li>
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />CloudLinux OS
                            </li>
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />LiteSpeed with LS Cache
                            </li>
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />99% Uptime
                            </li>
                        </ul>
                        <div class="nawab-pricing__box-footer">
                            <a href="https://my.nawabhost.com/cart.php?a=add&currency={{ currency() }}&pid={{ $first['pid'] }}" class="nawab-pricing__box-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="nawab-pricing__box">
                        <div class="nawab-pricing__box-header">
                            <div class="nawab-pricing__box-icon">
                                <img src="media/pricing/cloud-computing.svg" alt="cloud-computing-icon" />
                            </div>
                            <h3 class="nawab-pricing__box-title">
                                Reseller Hosting
                            </h3>
                            <div class="nawab-pricing__box-price">
                                @php
                                    $reseller = $products->where('pid', 48);
                                    $first = $reseller->first();
                                    $pricing = $first['pricing'][currency(true)];
                                @endphp
                                <span class="nawab-pricing__box-price-amount">{{ money($pricing['monthly'], currency(true)) . $pricing['suffix'] }}</span>
                                <span class="nawab-pricing__box-price-duration">/year</span>
                            </div>
                        </div>
                        @php
                            $description = $first['description'];
                            $descByList = array_map(function($line) {
                                $parts = explode(':', $line, 2);
                                $value = trim($parts[1]);
                                $subject = trim($parts[0]);
                                return "<strong>$value</strong> $subject";
                            }, explode(PHP_EOL, $description));
                        @endphp
                        <ul class="nawab-pricing__box-feature">
                            @foreach($descByList as $line)
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />{!! $line !!}
                            </li>
                            @endforeach
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />Offsite Backup
                            </li>
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />LiteSpeed with LS Cache
                            </li>
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />CloudLinux for Security
                            </li>
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />99% Uptime
                            </li>
                        </ul>
                        <div class="nawab-pricing__box-footer">
                            <a href="https://my.nawabhost.com/cart.php?a=add&currency={{ currency() }}&pid={{ $first['pid'] }}" class="nawab-pricing__box-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="nawab-pricing__box">
                        <div class="nawab-pricing__box-header">
                            <div class="nawab-pricing__box-icon">
                                <img src="media/pricing/cloud-computing.svg" alt="cloud-computing-icon" />
                            </div>
                            <h3 class="nawab-pricing__box-title">
                                VPS Hosting
                            </h3>
                            <div class="nawab-pricing__box-price">
                                @php
                                    $vps = $products->where('pid', 27);
                                    $first = $vps->first();
                                    $pricing = $first['pricing'][currency(true)];
                                @endphp
                                <span class="nawab-pricing__box-price-amount">{{ money($pricing['monthly'], currency(true)) . $pricing['suffix'] }}</span>
                                <span class="nawab-pricing__box-price-duration">/year</span>
                            </div>
                        </div>
                        @php
                            $description = $first['description'];
                            $descByList = array_map(function($line) {
                                $parts = explode(':', $line, 2);
                                $value = trim($parts[1]);
                                $subject = trim($parts[0]);
                                return "<strong>$value</strong> $subject";
                            }, explode(PHP_EOL, $description));
                        @endphp
                        <ul class="nawab-pricing__box-feature">
                            @foreach($descByList as $line)
                            <li>
                                <img src="media/pricing/tick.svg" alt="tick icon"
                                    class="nawab-pricing__tick-icon" />{!! $line !!}
                            </li>
                            @endforeach
                        </ul>
                        <div class="nawab-pricing__box-footer">
                            <a href="https://my.nawabhost.com/cart.php?a=add&currency={{ currency() }}&pid={{ $first['pid'] }}" class="nawab-pricing__box-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========================-->
    <!--=   Funfact   =-->
    <!--=========================-->
    <section class="nawab-funfact">
        <div class="nawab-funfact__overlay"></div>
        <div class="container">
            <div class="row nawab-funfact__content wow fadeInUp" data-wow-delay=".10s">
                <div class="col">
                    <h3 class="nawab-funfact__counter">1K</h3>
                    <h4 class="nawab-funfact__title">Clients</h4>
                </div>
                <div class="col">
                    <h3 class="nawab-funfact__counter">4K</h3>
                    <h4 class="nawab-funfact__title">Domain</h4>
                </div>
                <div class="col">
                    <h3 class="nawab-funfact__counter">3K</h3>
                    <h4 class="nawab-funfact__title">Servers</h4>
                </div>
                <div class="col">
                    <h3 class="nawab-funfact__counter">2K</h3>
                    <h4 class="nawab-funfact__title">Installs</h4>
                </div>
            </div>
        </div>
    </section>

    <!--=========================-->
    <!--=   Testimonial   =-->
    <!--=========================-->
    <x-testimonial/>

    <!--=========================-->
    <!--=   Service   =-->
    <!--=========================-->
    <x-service/>

    <!--=========================-->
    <!--=   FAQ   =-->
    <!--=========================-->
    <x-faq/>

    <!--=========================-->
    <!--=   Client Logo   =-->
    <!--=========================-->
    <x-client-logo/>
    
<x-footer/>
</x-master>