<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - 404 Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            width: 100%;
            box-sizing: border-box;
        }
        h1 {
            color: #e74c3c;
        }
        p {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
        }
        a {
            color: darkblue;
            text-decoration: underline;
        }
        .stitchConfuse {
            width: 150px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Oops! Page Not Found - 404 Error</h1>
    <p>Stitch cannot find the page you're looking for.</p>
    <p>Please check the URL for proper spelling and capitalization. <br> If you're still having trouble, you can go back <a href="/">here</a> to keep navigating.</p>
    <p>If you believe this is a mistake, feel free to contact me at: smir0002@hz.nl and let me know.</p>
    <img src="{{ asset('images/stitchConfuse.png') }}" class="stitchConfuse" alt="stitch confuse">
</div>
</body>
</html>
