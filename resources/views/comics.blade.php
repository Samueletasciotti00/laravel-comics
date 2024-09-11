@extends('layouts.main')

@section('content')
<!-- Content -->

<div class="container my-5">

    <!-- Container Immage -->
    <div class="cover">

        <!-- Image -->
        <img src="/img/jumbotron.jpg" alt="Jumbotron">


    </div>

    <!-- ABSOLUTE TITOL -->
    <!-- <div class="description">
        CURRENT SERIES
    </div> -->

    <!-- Current Series -->
    <div class="serie">
        
        <!-- Comics list -->
        <ul>
            <li><img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="Comic"></li>
        </ul>


    </div>

    <!-- Logos -->
    <div class="logos">
        <ul style="list-style: none;">
            <li>
                <span>Digital Comics</span>
                <img src="/img/buy-comics-digital-comics.png" alt="">
            </li>

            <li>
                <span>DC Merchandise</span>
                <img src="/img/buy-comics-merchandise.png" alt="">
            </li>

            <li>
                <span>Subscription</span>
                <img src="/img/buy-comics-subscriptions.png" alt="">
            </li>

            <li>
                <span>Comic shop locator</span>
                <img src="/img/buy-comics-shop-locator.png" alt="">
            </li>

            <li>
                <span>DC Power Vista</span>
                <img src="/img/buy-dc-power-visa.svg" alt="">
            </li>
        </ul>
    </div>
</div>
@endsection