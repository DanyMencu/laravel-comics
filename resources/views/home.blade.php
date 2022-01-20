@extends('layouts.main_page')

@section('head-title', 'Comics | DC Comics')

@section('main-content')

<section class="main-section">
    <div class="container">
        <div class="comics-section">
            <div class="content">
                @foreach ($comics as $index => $comic)
                    <a href="{{ route('comic-details', ['id' => $index]) }}" class="comic ">
                        <div class="poster">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h3 class="title">{{ $comic['series'] }}</h3>
                    </a>
                @endforeach
            </div>
    
            <button class="btn-load">
                Load more
            </button>

        </div>
    </div>
</section>

@endsection