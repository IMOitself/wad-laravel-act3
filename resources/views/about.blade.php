<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .scroll-container {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
            gap: 10px;
            width: 50%;
        }

        .card {
            flex: 0 0 200px;
            height: 175px;
            border: 1px solid #000;
        }

        .card img {
            margin: 0;
            display: block;
            height: 70%;
            width: 100%;
            object-fit: contain;
            background-color: #000;
        }

        .card p {
            height: 30%;
            text-align: center;
            font-size: small;
        }
    </style>
</head>
<body>
    <h1>about</h1>
    <nav>
        <a href="/">home</a>
        <a href="/about">about</a>
        <a href="/socials">socials</a>
    </nav>
    <p>
        a minimalist, pacifist and an optimistic person.<br>
        currently a 2nd year BSIS student.<br>
    </p>

    <h5>currently interested in:</h5>

    <div class="scroll-container">
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/w6ohjZ9HPN5aUHEaf7Pkiy65yex.png"><p>frieren</p></div>
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/rF0yV5u8l0pmRgQloZok8VDxAcM.png"><p>game of thrones spinoff</p></div>
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/kyhbjHomRagzpNEeyKSssbkPWan.png"><p>fallout</p></div>
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/cT7ZcQDZqY0gGRLfevRXR5baEha.png"><p>wake up deadman</p></div>
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/7oCGn4lB3eWiUhts1C04c5yZd2J.png"><p>knives out</p></div>
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/8qKoeXiODUPUELo6F8WH9iVovuh.png"><p>predator: badlands</p></div>
        <div class="card"><img src="https://media.themoviedb.org/t/p/w1280/jCAF2HRnJkhqrFOr2bsr3Vfgn7D.png"><p>predator: killer of killers</p></div>
        
        
    </div>



</body>