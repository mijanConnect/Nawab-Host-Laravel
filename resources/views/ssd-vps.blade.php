<x-master title="SSD VPS">
<x-header/>
<!--=========================-->
<!--=          Hero         =-->
<!--=========================-->
<section class="hero-2">
    <div class="hero-2__image">
        <div class="hero-2__content">
            <h1 class="hero-2__heading wow fadeInUp" data-wow-delay=".10s">Pure SSD VPS</h1>
            <p class="hero-2__paragraph wow fadeInUp" data-wow-delay=".15s">Our high performance servers are deserver a PURE SSD with RAID-10 Protection.
            </p>
        </div>
    </div>
</section>

<!--=========================-->
<!--=       Features        =-->
<!--=========================-->
<section class="features">
    <div class="container">
        <div class="section-heading">
            <h2 class="features__section-title wow fadeInUp" data-wow-delay=".10s">
                Best Hosting Plans You Will <br> Ever Experience.
            </h2>
            <p class="features__section-description wow fadeInUp" data-wow-delay=".15s">
                Get the best website hosting plans and make your dreams a reality.
            </p>
        </div>
        <div class="row wow fadeInUp" data-wow-delay=".20s">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="features__box">
                    <div class="features__box-icon">
                        <img src="media/features/icon-1.svg" alt="cpanel icon" />
                    </div>
                    <div class="features__box-content">
                        <h3 class="features__box-title">
                            Cloud Optimized
                        </h3>
                        <p class="features__box-description">
                            Interaction of effectively choosing and allotting the correct assets to a remaining task
                            at
                            hand or application.
                        </p>
                        <a href="#" class="features__box-link">Learn More<i
                                class="fas fa-arrow-right features__arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="features__box">
                    <div class="features__box-icon">
                        <img src="media/features/icon-2.svg" alt="vps icon" />
                    </div>
                    <div class="features__box-content">
                        <h3 class="features__box-title">
                            24/7 Online Support
                        </h3>
                        <p class="features__box-description">
                            Online type of giving client assistance and assisting clients with settling different
                            issues
                            with 24/7 support.
                        </p>
                        <a href="#" class="features__box-link">Learn More<i
                                class="fas fa-arrow-right features__arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="features__box">
                    <div class="features__box-icon">
                        <img src="media/features/icon-3.svg" alt="shared icon" />
                    </div>
                    <div class="features__box-content">
                        <h3 class="features__box-title">
                            Secure Data
                        </h3>
                        <p class="features__box-description">
                            Shielding computerized data from unapproved access or burglary all through its whole
                            lifecycle with secure.
                        </p>
                        <a href="#" class="features__box-link">Learn More<i
                                class="fas fa-arrow-right features__arrow-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<x-about/>

<!--=========================-->
<!--=    Call-to-action     =-->
<!--=========================-->
<x-call-to-action/>

<!--=========================-->
<!--=         Server          =-->
<!--=========================-->
<section class="server wow fadeInUp" data-wow-delay=".10s">
    <div class=" container">
        <table class="table table-borderless server__full-table">
            <thead>
                <tr class="server__table">
                    <th scope="col">Model</th>
                    <th scope="col">RAM</th>
                    <th scope="col">CPUs</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Bandwidth</th>
                    <th scope="col">Monthly Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($vps as $product)
                <tr>
                    @php
                        $description = $product['description'];
                        $descByList = array_map(function($line) {
                            $parts = explode(':', $line, 2);

                            return trim($parts[1]);
                        }, explode(PHP_EOL, $description));
                    @endphp
                    <td>{{ $product['name'] }}</td>
                    @foreach($descByList as $line)
                        <td>{{ $line }}</td>
                    @endforeach
                    @php
                        $pricing = $product['pricing'][currency(true)];
                    @endphp
                    <td>{{ money($pricing['monthly'], currency(true)) . $pricing['suffix'] }}</td>
                    <td><a href="https://my.nawabhost.com/cart.php?a=add&currency={{ currency() }}&pid={{ $product['pid'] }}" class="server__order-now-btn">Order Now</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>

<!--=========================-->
<!--=        Service        =-->
<!--=========================-->
<x-testimonial/>

<x-footer/>
</x-master>