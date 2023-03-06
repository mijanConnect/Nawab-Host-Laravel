<x-master title="Cloud Hosting">
<x-header/>

<!--=========================-->
<!--=          Hero         =-->
<!--=========================-->
<section class="hero-2">
    <div class="hero-2__image">
        <div class="hero-2__content">
            <h1 class="hero-2__heading wow fadeInUp" data-wow-delay=".10s">Extreme Cloud Hosting</h1>
            <p class="hero-2__paragraph wow fadeInUp" data-wow-delay=".15s">Have a very high traffic website? And do not want down in visitor spike? <br> Let take a look at our plans.</p>
        </div>
    </div>
</section>

<!--=========================-->
<!--=       Pricing         =-->
<!--=========================-->
<section class="pricing-3 wow fadeInUp" data-wow-delay=".10s">
    <div class="container">
        <div class="pricing-3__container">
            <div class="pricing-3__package-heading">
                <h4 class="pricing-3__left-header">Sample</h4>
                <h5 class="pricing-3__left-price">$ 4.99 / Month</h5>
                <ul class="pricing-3__left-column">
                    @php
                        $product = $hosting[0];
                    @endphp
                    @php
                        $description = $product['description'];
                        $descByList = array_map(function($line) {
                            $parts = explode(':', $line, 2);
                            $value = trim($parts[1]);
                            $subject = trim($parts[0]);
                            return "$subject";
                        }, explode(PHP_EOL, $description));
                    @endphp
                    @foreach($descByList as $line)
                    <li class="pricing-3__left-column-feature">{!! $line !!}</li>
                    @endforeach
                    <li class="pricing-3__left-column-feature">Mail Support</li>
                    <li class="pricing-3__left-column-feature">Customer Support</li>
                    <li class="pricing-3__left-column-feature">Setup</li>
                    <li class="pricing-3__left-column-feature">Marketing</li>
                </ul>
                <div class="pricing-3__button-1">
                    <a href="" class="pricing-3__box-btn">Purchase Now</a>
                </div>
            </div>
            @foreach($hosting as $product)
            <div class="pricing-3__package-1">
                <h4 class="pricing-3__header-1">{{ $product['name'] }}</h4>
                    @php
                        $pricing = $product['pricing'][currency(true)];
                    @endphp
                <h5 class="pricing-3__price-1">{{ money($pricing['monthly'], currency(true)) . $pricing['suffix'] }} / Month</h5>
                @php
                    $description = $product['description'];
                    $descByList = array_map(function($line) {
                        $parts = explode(':', $line, 2);
                        $value = trim($parts[1]);
                        $subject = trim($parts[0]);
                        return "$value";
                    }, explode(PHP_EOL, $description));
                @endphp
                <ul class="pricing-3__column-1">
                    @foreach($descByList as $line)
                    <li class="pricing-3__column-feature">{!! $line !!}</li>
                    @endforeach
                    <li class="pricing-3__column-feature">Free</li>
                    <li class="pricing-3__column-feature">24/7 Hour</li>
                    <li class="pricing-3__column-feature">Anytime Auto Scale</li>
                    <li class="pricing-3__column-feature">Free</li>
                </ul>
                <div class="pricing-3__button-2">
                    <a href="https://my.nawabhost.com/cart.php?a=add&currency={{ currency() }}&pid={{ $product['pid'] }}" class="pricing-3__box-btn">Purchase Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--=========================-->
<!--=        Service        =-->
<!--=========================-->
<x-service/>

<!--=========================-->
<!--=        About          =-->
<!--=========================-->
<x-about/>

<!--=========================-->
<!--=      Testimonial      =-->
<!--=========================-->
<x-testimonial/>

<x-footer/>
</x-master>