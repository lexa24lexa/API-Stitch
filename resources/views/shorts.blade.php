<x-layout.main>
    <body>
    <div id="shortFilms-container">
        <h1 class="categories">Shorts</h1>
        <div class="shortFilms-grid">
        </div>
    </div>
    <script>
        const imagePathMap = {
            'The Origin of Stitch': "{{ asset('images/originOfStitch.png') }}",
        }
    </script>
    <script src="{{ asset('js/stitch.js') }}"></script>
    </body>
</x-layout.main>
