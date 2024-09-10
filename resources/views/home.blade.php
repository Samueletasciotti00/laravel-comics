{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
<div>
    <div id="head_container">

        <!-- Logo -->
        <div>
            <span><img src="img/dc-logo.png" alt=""></span>
        </div>

        <!-- Lista opzioni -->
        <div>
            <ul>

                <!-- Elementi Voci Menu -->
                <li>CHARACTERS</li>
                <li>COMICS</li>
                <li>MOVIES</li>
                <li>TV</li>
                <li>GAMES</li>
                <li>COLLECTIBLES</li>
                <li>VIDEOS</li>
                <li>FANS</li>
                <li>NEWS</li>
                <li>SHOP</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container my-5">

</div>

@endsection


@section('titlePage')
home
@endsection