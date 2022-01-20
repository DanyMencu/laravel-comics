@extends('layouts.main_page')

@section('head-title', 'Details Comic | DC Comics')

@section('main-content')

    <section class="comic-section">
        <div class="jumbotron"></div>
        <div class="comic-content">
            <div class="container">
                <div class="comic-poster">
                    <span class="genre">{{ $comic['type'] }}</span>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] . ' poster' }}">
                    <button class="btn-gallery">View gallery</button>
                </div>
                <div class="comic-details">

                    <div class="description">
                        <h3>{{ $comic['title'] }}</h3>

                        <div class="price-availability .text-normal">
                            <div class="left-side">
                                <span>
                                    U.S. Price:
                                    <span class="visibile">{{ $comic['price']}}</span>
                                </span>
                                <span>AVAILABLE</span>
                            </div>
                            <span class="right-side visibile">Check availability</span>
                        </div>

                        <p class="text-normal">{{ $comic['description'] }}</p>
                    </div>

                    <div class="adv">
                        <span class="text-right">Advertisement</span>
                        <a href="https://www.dccomics.com/">
                            <img src="{{ asset('images/adv.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection