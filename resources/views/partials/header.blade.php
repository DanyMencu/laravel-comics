    <header>
        <div class="container nav">
            <a href="/">
                <img src="{{ asset('images/dc-logo.png') }}" alt="Dc logo">
            </a>
            <ul class="nav">
                <li>
                    <a href="{{ route('home') }}"
                        @if (Request::route()->getName() === 'home') class="active" @endif>
                        Comics
                    </a>
                </li>
                <li>
                    <a href="/news"
                    @if (Request::route()->getName() === 'home') class="news" @endif>
                        News
                    </a>
                </li>
            </ul>
        </div>
    </header>
