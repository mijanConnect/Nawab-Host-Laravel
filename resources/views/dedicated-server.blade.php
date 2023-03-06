<x-master title="Dedicated Servers">
<x-header/>

<!--=========================-->
<!--=         Hero          =-->
<!--=========================-->
<section class="hero-2">
    <div class="hero-2__image">
        <div class="hero-2__content">
            <h1 class="hero-2__heading wow fadeInUp" data-wow-delay=".10s">Dedicated Servers</h1>
            <p class="hero-2__paragraph wow fadeInUp" data-wow-delay=".15s">For a business site, Take the dedicated and unshared server resources with others.</p>
        </div>
    </div>
</section>

<!--=========================-->
<!--=         Server          =-->
<!--=========================-->
<section class="server wow fadeInUp" data-wow-delay=".10s">
    <div class=" container">
        <table class="table table-borderless server__full-table">
            <thead>
                <tr class="server__table">
                    <th scope="col">Model</th>
                    <th scope="col">Cores</th>
                    <th scope="col">Speed</th>
                    <th scope="col">Memory</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Network</th>
                    <th scope="col">Bandwidth</th>
                    <th scope="col">Monthly Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($servers as $product)
                <tr>
                    @php
                        $description = $product['description'];
                        $descByList = array_map(function($line) {
                            $parts = explode(':', $line, 2);

                            return trim($parts[1]);
                        }, explode(PHP_EOL, $description));
                    @endphp
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
<!--=       Service         =-->
<!--=========================-->
<x-service/>

<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<x-about/>

<!--=========================-->
<!--=    Call-to-action     =-->
<!--=========================-->
<x-call-to-action/>

<!--=========================-->
<!--=        FAQ            =-->
<!--=========================-->
<x-faq/>

<x-footer/>
</x-master>