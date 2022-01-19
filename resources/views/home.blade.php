@extends('layouts.main_page')

@section('main-content')

<section class="main-section">
    <div class="container">
        <div class="comics-section">
            <div class="content">
                @foreach ($comics as $comic)
                    <a href="" class="comic ">
                        <div class="poster">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h3 class="title">{{ $comic['title'] }}</h3>
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