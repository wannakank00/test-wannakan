<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        
         :root {
            --soft-orange: hsl(35, 77%, 62%);
            --soft-red: hsl(5, 85%, 63%);
            --off-white: hsl(36, 100%, 99%);
            --grayish-blue: hsl(233, 8%, 79%);
            --dark-grayish-blue: hsl(236, 13%, 42%);
            --very-dark-blue: hsl(240, 100%, 5%);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: var(--dark-grayish-blue);
            background-color: var(--off-white);
        }

        .container {
            max-width: 1440px; /* Desktop width */
            margin: 0 auto;
            padding: 0 20px;
        }
    </style>
</head>
<body>
<div class="container">
        @yield('content')
    </div>
</body>
</html>
