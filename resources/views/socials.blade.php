<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>socials</title>
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
            align-content: center;
            justify-content: center;
            text-align: center;
            text-decoration: none;
        }

        .card img {
            width: 30%;
            object-fit: cover;
            filter: brightness(0) invert(1); /* makes the image white:D */
        }

        .card p {
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>socials</h1>
    <nav>
        <a href="/">home</a>
        <a href="/about">about</a>
        <a href="/socials">socials</a>
    </nav>

    <br>

    <div class="scroll-container">
        <a href="https://github.com/IMOitself" class="card" style="background-color: #222222;"><img src="https://simpleicons.org/icons/github.svg"><p>github</p></a>
        <a href="https://www.deviantart.com/imo7" class="card" style="background-color: #05CC47;"><img src="https://simpleicons.org/icons/deviantart.svg"><p>deviantart</p></a>
        <a href="https://sketchfab.com/imoitself" class="card" style="background-color: #1CAAD9;"><img src="https://simpleicons.org/icons/sketchfab.svg"><p>sketchfab</p></a>
        <a href="https://discord.com/users/903170305634226207" class="card" style="background-color: #5865F2;"><img src="https://simpleicons.org/icons/discord.svg"><p>discord</p></a>
        <a href="https://www.facebook.com/profile.php?id=100083333136200" class="card" style="background-color: #0866FF;"><img src="https://simpleicons.org/icons/facebook.svg"><p>facebook</p></a>
        <a href="https://www.chess.com/member/imo_itself" class="card" style="background-color: #81B64C;"><img src="https://simpleicons.org/icons/chessdotcom.svg"><p>chess</p></a>
        <a href="https://www.xbox.com/en-PH/play/user/IMOitself" class="card" style="background-color: #499B49;"><img src="https://favicone.com/xbox.com?s=128"><p>xbox</p></a>
        <a href="https://steamcommunity.com/profiles/76561198739538125" class="card" style="background-color: #171D25;"><img src="https://simpleicons.org/icons/steam.svg"><p>steam</p></a>
        <a href="https://roblox.com/users/957957895/profile" class="card" style="background-color: #000;"><img src="https://simpleicons.org/icons/roblox.svg"><p>roblox</p></a>
        <a href="https://mcpedl.com/user/imoitself/" class="card" style="background-color: #00A42D;"><img src="https://simpleicons.org/icons/hackthebox.svg"><p>mcpedl</p></a>
        <a href="https://anilist.co/user/IMOitself/animelist" class="card" style="background-color: #02A9FF;"><img src="https://simpleicons.org/icons/anilist.svg"><p>anilist</p></a>
        <a href="https://www.pixiv.net/en/users/89189205" class="card" style="background-color: #0096FA;"><img src="https://simpleicons.org/icons/pixiv.svg"><p>pixiv</p></a>
        <a href="https://x.com/IMOitself" class="card" style="background-color: #000000;"><img src="https://simpleicons.org/icons/x.svg"><p>twitter</p></a>
        <a href="https://www.youtube.com/channel/UCcdRiEI4ucNfEnG7TqAM3Fw" class="card" style="background-color: #FF0000;"><img src="https://simpleicons.org/icons/youtube.svg"><p>youtube</p></a>
        <a href="https://linktr.ee/imoitself" class="card" style="background-color: #4495DE;"><img src="https://simpleicons.org/icons/linktree.svg"><p>linktree</p></a>
        
    </div>

</body>