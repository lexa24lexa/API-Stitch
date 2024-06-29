<x-layout.main>
    <title>Server Error - 500</title>
    <style>
        .container-error {
            background-color: lightskyblue;
            height: 100vh;
        }

        h1 {
            color: #e74c3c;
            font-family: Roboto, sans-serif;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
            line-height: 1.6;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Roboto, sans-serif;
        }

        a {
            color: darkblue;
            text-decoration: underline;
        }
    </style>
    <body>
    <div class="container-error">
        <h1>Oops! Something went wrong (500 Error).</h1>
        <img src="{{ asset('images/runningStitch.gif') }}" class="runningStitchGif" alt="stitch running">
        <br><br><br><br><br><br><br><br><br>
        <p>Stich can't understand what is happening.</p>
        <p>Experiencing technical difficulties, working hard to solve the problem. <br> Please try again later. <br> If the
            problem persists, contact me at: smir002@hz.nl. <br> Thank you for your patience.</p>
        <p>Please <a href="/"> go back to the home page </a> and continue browsing.</p>
    </div>
    </body>
</x-layout.main>
