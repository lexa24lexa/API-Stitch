{{-- Navigation bar --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
<nav class="navbar">
    <section class="navbar-container">
        <div class="navbar-brand">
            <p class="stitch-nav">Stitch</p>
            <img src="{{ asset('images/stitchLogo.png') }}" class="logo" alt="logo">
        </div>
        <div class="navbar-menu-main" id="navMenu">
            {{-- Button for home page --}}
            <a href="/" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Stitch home</a>
            {{-- Button for movies page --}}
            <a href="/movies" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Movies</a>
            {{-- Button for shorts page --}}
            <a href="/shorts" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Shorts</a>
            {{-- Button for TV shows page --}}
            <a href="/tvshows" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">TV Shows</a>
            {{-- Button for videogames page --}}
            <a href="/videogames" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Videogames</a>
            {{-- Button for park attractions page --}}
            <a href="/parkattractions" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Park Attractions</a>
            <a href="/cats" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Cats</a>
            <a href="/stitch" class="nav-buttons {{ Request::route()->getName() === 'index' ? "is-active" : "" }}">Stitch</a>
        </div>
    </section>
</nav>
