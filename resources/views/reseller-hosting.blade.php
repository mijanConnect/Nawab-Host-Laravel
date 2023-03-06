<x-master title="Reseller Hosting">
<x-header/>
<!--=========================-->
<!--=         Hero          =-->
<!--=========================-->
<section class="hero-2">
    <div class="hero-2__image">
        <div class="hero-2__content">
            <h1 class="hero-2__heading wow fadeInUp" data-wow-delay=".10s">cPanel/WHM Reseller Hosting</h1>
            <p class="hero-2__paragraph wow fadeInUp" data-wow-delay=".15s">To start your own hosting business we
                have
                the best offer for you. Here we
                listed <br>
                the package featured with your new reseller hosting business needs</p>
        </div>
    </div>
</section>

<!--=========================-->
<!--=        Pricing        =-->
<!--=========================-->
<section class="nawab-pricing-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mx-auto my-auto" data-wow-delay=".10s">
                <div class="nawab-pricing-2__box">
                    <div class="nawab-pricing-2__box-header">
                        <h3 class="nawab-pricing-2__box-title">
                            Reseller Hosting
                        </h3>
                        <div class="nawab-pricing-2__box-price">
                            @php
                                $pricing = $product['pricing'][currency(true)];
                            @endphp
                            <span class="nawab-pricing-2__box-price-amount">{{ money($pricing['monthly'], currency(true)) . $pricing['suffix'] }}</span>
                            <span class="nawab-pricing-2__box-price-duration">/mo</span>
                        </div>
                    </div>
                        @php
                            $description = $product['description'];
                            $descByList = array_map(function($line) {
                                $parts = explode(':', $line, 2);
                                $value = trim($parts[1]);
                                $subject = trim($parts[0]);
                                return "<strong>$value</strong> $subject";
                            }, explode(PHP_EOL, $description));
                        @endphp
                    <ul class="nawab-pricing-2__box-feature">
                        @foreach($descByList as $line)
                            <li>
                                <img src="media/pricing/tick-red.svg" alt="tick icon"
                                    class="nawab-pricing-2__tick-icon" />{!! $line !!}
                            </li>
                        @endforeach
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />Offsite Backup
                        </li>
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />LiteSpeed with LS Cache
                        </li>
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />CloudLinux for Security
                        </li>
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />99% Uptime
                        </li>
                    </ul>
                    <div class="nawab-pricing-2__box-footer">
                        <a href="https://my.nawabhost.com/cart.php?a=add&currency={{ currency() }}&pid={{ $product['pid'] }}" class="nawab-pricing-2__box-btn">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=========================-->
<!--=        Service        =-->
<!--=========================-->
<x-service/>

<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<x-about/>

<x-footer/>
</x-master>