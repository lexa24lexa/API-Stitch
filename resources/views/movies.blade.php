<x-layout.main>
    <body>
    <div id="films-container">
        <h1 class="categories">Movies</h1>
        <div class="movies-grid">
        </div>
    </div>

    <script>
        const imagePathMap = {
            'Lilo & Stitch': "{{ asset('images/liloStitch.png') }}",
            'Lilo & Stitch 2: Stitch Has a Glitch': "{{ asset('images/liloStitch2hasaglitch.jpg') }}",
            'Stitch! The Movie': "{{ asset('images/stitchTheMovie.png') }}",
            'Leroy & Stitch': "{{ asset('images/leroyAndStitch.png') }}",
            'Lilo & Stitch (live-action film)': "{{ asset('images/noImage.jpg') }}",
        }
        const excludeMovies = [
            'Treasure Planet',
            'Brother Bear',
            'Outtakes',
            'The Lion King 1½',
            'Once Upon a Halloween',
            'Big Hero 6',
            'Ralph Breaks the Internet'
        ];
    </script>
    <script src="{{ asset('js/stitch.js') }}"></script>
    </body>
</x-layout.main>

