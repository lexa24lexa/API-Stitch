<x-layout.main>
    <body>
    <div id="parkAttractions-container">
        <h1 class="categories">Park attractions</h1>
        <div class="parkAttractions-grid">
            <!-- Park Attraction items will be dynamically inserted here by the script -->
        </div>
    </div>
    <script>
        const imagePathMap = {
            'Stitch\'s Great Escape!': "{{ asset('images/greatEscape.jpg') }}",
            'Stitch\'s Supersonic Celebration': "{{ asset('images/supersonicCelebration.jpg') }}",
            'Fantasmic!': "{{ asset('images/noImage.jpg') }}",
            'The Enchanted Tiki Room: Stitch Presents Aloha e Komo Mai!': "{{ asset('images/tikiRoom.jpg') }}",
            'Stitch Encounter': "{{ asset('images/encounter.jpg') }}",
            'Celebrate a Dreams Come True Parade': "{{ asset('images/dreamsParade.jpg') }}",
            'Disney Stars and Motorcars Parade': "{{ asset('images/motorcarsParade.jpg') }}",
            'It\'s a Small World': "{{ asset('images/smallWorld.jpg') }}",
            'The Golden Mickeys': "{{ asset('images/goldenMickeys.jpg') }}",
            'World of Color': "{{ asset('images/worldOfColor.jpg') }}",
            'Celebrate the Magic': "{{ asset('images/celebrateMagic.jpg') }}",
            'Mickey and the Magical Map': "{{ asset('images/magicalMap.jpg') }}",
            'Fashionable Easter': "{{ asset('images/noImage.jpg') }}",
            'Halloween Pop\'n LIVE': "{{ asset('images/halloweenPop.jpg') }}",
            'Wonderful World of Animation': "{{ asset('images/noImage.jpg') }}",
        }
    </script>
    <script src="{{ asset('js/stitch.js') }}"></script>
    </body>
</x-layout.main>
