<x-layout.main>
    <h1>"Ohana Means Family. Family Means Nobody Gets Left Behind Or Forgotten."</h1>
    <img src="{{ asset('images/runningStitch.gif') }}" class="runningStitchGif" alt="stitch running">
    {{-- Dropdown --}}
    <div class="dropdown">
        <button class="dropbtn">Search for...
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            {{-- Dropdown for movies page --}}
            <a href="/movies">Movies</a>
            {{-- Dropdown for shorts page --}}
            <a href="/shorts">Shorts</a>
            {{-- Dropdown for TV shows page --}}
            <a href="/tvshows">TV shows</a>
            {{-- Dropdown for videogames page --}}
            <a href="/videogames">VideoGames</a>
            {{-- Dropdown for park attractions page --}}
            <a href="/parkattractions">Park Attractions</a>
        </div>
    </div>
    <img src="{{ asset('images/stitchLingua.gif') }}" class="stitchLinguaGif" alt="stitch showing his tongue">
</x-layout.main>
