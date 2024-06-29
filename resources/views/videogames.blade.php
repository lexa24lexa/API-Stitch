<x-layout.main>
    <body>
    <div id="videoGames-container">
        <h1 class="categories">Videogames</h1>
        <div class="videoGames-grid">
        </div>
    </div>
    <script>
        const imagePathMap = {
            'Lilo & Stitch (Game Boy Advance)': "{{ asset('images/gba.jpg') }}",
            'Lilo & Stitch Pinball': "{{ asset('images/pinball.jpg') }}",
            'Lilo & Stitch: Trouble in Paradise': "{{ asset('images/troubleInParadise.jpg') }}",
            'Lilo & Stitch: Hawaiian Adventure': "{{ asset('images/hawaiianAdventure.png') }}",
            'Disney\'s Stitch: Experiment 626': "{{ asset('images/experiment626.png') }}",
            'Lilo & Stitch 2: Hämsterviel Havoc': "{{ asset('images/hamstervielHavoc.jpg') }}",
            'Kingdom Hearts (series)': "{{ asset('images/kingdomHearts.png') }}",
            'Stitch Jam': "{{ asset('images/stitchJam.jpg') }}",
            'Stitch Jam 2': "{{ asset('images/stitchJam2.png') }}",
            'Disney Friends': "{{ asset('images/disneyFriends.jpg') }}",
            'Meteos: Disney Magic': "{{ asset('images/meteos.png') }}",
            'Disney TH!NK Fast': "{{ asset('images/thinkFast.jpg') }}",
            'Disney Universe': "{{ asset('images/universe.jpg') }}",
            'Kinect: Disneyland Adventures': "{{ asset('images/disneylandAdventures.jpg') }}",
            'Disney Infinity (series)': "{{ asset('images/infinity.jpg') }}",
            'Disney Magical World': "{{ asset('images/magicalWorld.jpg') }}",
            'Disney Tsum Tsum (game)': "{{ asset('images/tsumTsum.jpg') }}",
            'Disney Emoji Blitz': "{{ asset('images/emojiBlitz.jpg') }}",
            'Disney Crossy Road': "{{ asset('images/crossyRoad.jpg') }}",
            'Disney Magical Dice': "{{ asset('images/magicalDice.jpg') }}",
            'Disney Magic Kingdoms': "{{ asset('images/magicKingdoms.jpg') }}",
            'Disney Heroes: Battle Mode': "{{ asset('images/battleMode.jpg') }}",
            'Disney Epic Quest': "{{ asset('images/noImage.jpg') }}",
            'Disney Tsum Tsum Festival': "{{ asset('images/tsumTsumFestival.png') }}",
            'Disney Sorcerer\'s Arena': "{{ asset('images/sorcerersArena.jpg') }}",
            'Disney Getaway Blast': "{{ asset('images/getawayBlast.jpg') }}",
        }
    </script>
    <script src="{{ asset('js/stitch.js') }}"></script>
    </body>
</x-layout.main>
