<x-master title="cPnael Hosting">
<x-header/>

<!--=========================-->
<!--=         Hero          =-->
<!--=========================-->
<section class="hero-2">
    <div class="hero-2__image">
        <div class="hero-2__content">
            <h1 class="hero-2__heading wow fadeInUp" data-wow-delay=".10s">Premimum cPanel SSD Hosting</h1>
            <p class="hero-2__paragraph wow fadeInUp" data-wow-delay=".15s">Our cPanel hostings for everyone beginner to expert. <br> The server is come with Latest Generation hardware and pure SSD storage <br> to run site faster than traditional HDD storage.</p>
        </div>
    </div>
</section>

<!--=========================-->
<!--=        Pricing        =-->
<!--=========================-->
<section class="nawab-pricing-2">
    <div class="container">
        <div class="row">
            @foreach($hosting as $product)
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".10s">
                <div class="nawab-pricing-2__box">
                    <div class="nawab-pricing-2__box-header">
                        <h3 class="nawab-pricing-2__box-title">
                            {{ $product['name'] }}
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
                                class="nawab-pricing-2__tick-icon" />Powered by cPanel&reg;
                        </li>
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />CloudLinux OS
                        </li>
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />LiteSpeed with LS Cache
                        </li>
                        <li>
                            <img src="media/pricing/tick-red.svg" alt="tick icon"
                                class="nawab-pricing-2__tick-icon" />99% Uptime
                        </li>
                    </ul>
                    <div class="nawab-pricing-2__box-footer">
                        <a href="https://my.nawabhost.com/cart.php?a=add&billingcycle=monthly&currency={{ currency() }}&pid={{ $product['pid'] }}" class="nawab-pricing-2__box-btn">Purchase Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--=========================-->
<!--=    cPanel Features    =-->
<!--=========================-->
<section class="plan">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="plan__heading wow fadeInUp" data-wow-delay=".10s">cPanel Features</h2>
            </div>
        </div>
        <!-- /.row -->
        <div class="row wow fadeInUp" data-wow-delay=".15s">
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="plan__box">
                    <div class="plan__content">
                        <div class="plan-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="plan__details">
                            <h4 class="plan__title">cPanel Features</h4>
                            <p class="plan__dec">
                                LSCache (LiteSpeed Cache) offers a built-in module with plugins for dynamic content building. Speed up your WordPress, Joomla, Drupal, MediaWiki, and more.
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
                            <h4 class="plan__title">Easy backup and restore</h4>
                            <p class="plan__dec">
                                You can backup and/or restore from Google Drive, AWS S3, remote SFTP or local
                                machine in one click.
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
                            <h4 class="plan__title">GIT Deployment</h4>
                            <p class="plan__dec">
                                Connect Github and GitLab repos and deploy code in a few clicks via GIT webhooks
                                feature.
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
                            <h4 class="plan__title">Multi-object Caching Support</h4>
                            <p class="plan__dec">
                                Object caching integration made simple. With CyberPanel you can Integrate objects such as Redis, Memcached, or LiteSpeed Memcached (LSMCD).
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
                            <h4 class="plan__title">HTTP/3 & QUIC Support</h4>
                            <p class="plan__dec">
                                The latest HTTP protocol ensures better performance for fetching multiple objects at the same time, fast connections, retransmission of lost packets and lowest latency.
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
                            <h4 class="plan__title">Auto Installer</h4>
                            <p class="plan__dec">
                                One click auto installer option with CyberPanel. What does it take to install
                                WordPress (with LSCache)? Install Wordpress Joomla and Prestashop on CyberPanel in just one click.
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
<!--=          FAQ          =-->
<!--=========================-->
<x-faq/>

<x-footer/>
</x-master>