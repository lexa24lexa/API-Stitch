<x-layout.main>
    <body>
    <div id="tvShows-container">
        <h1 class="categories">TV Shows</h1>
        <div class="tvShows-grid">
        </div>
    </div>
    <script>
        const imagePathMap = {
            'Lilo & Stitch: The Series': "{{ asset('images/liloStitchSeries.jpg') }}",
            'Stitch!': "{{ asset('images/noImage.jpg') }}",
            'Stitch & Ai': "{{ asset('images/stitchAndAi.png') }}",
        }
        const excludeTVShows = [
            'A Poem Is...',
            'It\'s a Small World: The Animated Series',
        ];
    </script>
    <script src="{{ asset('js/stitch.js') }}"></script>
    </body>
</x-layout.main>
