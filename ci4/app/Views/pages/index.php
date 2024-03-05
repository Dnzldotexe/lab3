<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danziel Cempron</title>
    <!-- Inter font cdn  -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- CSS  -->
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/style.css">
    <link rel="icon" href="https://www.apc.edu.ph/wp-content/uploads/2019/05/cropped-apc-icon-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="https://www.apc.edu.ph/wp-content/uploads/2019/05/cropped-apc-icon-180x180.png"/>
</head>
<body>
    <!-- Navigation bar  -->
    <nav>
        <!-- Home  -->
        <a id="home" href="/lab3/ci4/public/index">dtcempron</a>
        <!-- Socials  -->
        <a href="https://www.linkedin.com/in/danzielc/" target="_blank"><img id="linkedin" src="<?php echo base_url(); ?>IMAGES/linkedin-box-fill.png" alt="LinkedIn Icon"></a>
        <a href="https://github.com/Dnzldotexe/lab2" target="_blank"><img id="github" src="<?php echo base_url(); ?>IMAGES/github-fill.png" alt="GitHub Icon"></a>
    </nav>
    <!-- Profile  -->
    <div id="profile">
        <!-- Profile Picture  -->
        <img style="width: 300px; height: 300px; object-fit: none; object-position: top;border-radius: 50%;" src="<?php echo base_url(); ?>IMAGES/profile-image.jpg" alt="Photo of Me">
        <!-- My Name  -->
        <p>Danziel Cempron</p>
    </div>
    <!-- About Me  -->
    <div class="container-1">
        <h1 id="about">About Me</h1>
        <!-- Description  -->
        <p>I'm an aspiring Data Engineer with 2 years of learning experience in Python and Shell. 
            Currently, I am taking a Bachelor's Degree in Computer Science at Asia Pacific College. 
            My experience in Python programming language has led me to an amazing 3 side projects and numerous happy codes. 
            From a simple <a id="link-hover" href="https://github.com/Dnzldotexe/Embeddable" target="_blank">text modifier</a> to a 
            simple <a id="link-hover" href="https://github.com/Dnzldotexe/trading-size-calculator-streamlit" target="_blank">calculator</a> to feed my crypto addiction (please don't tell my parents) 
            to a semi-complex application that can help you <a id="link-hover" href="https://github.com/Dnzldotexe/Bawat_Patak" target="_blank">track your water bill</a>. 
            Did I tell you that I am a fan of well-made films and TV shows? If you are too, then we can be friends. 
            Please shill me some of your favorite films and TV shows. I would love to watch them. 
            Below are my favorite films and TV shows that I can remember. Enjoy!
        </p>
    </div>
    <div class="container-1">
        <h1 id="favorites">Favorite Films</h1>
        <!-- Favorite Films  -->
        <div id="films-container">
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-1396-breaking-bad/3572/62085" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3xnWaLQjelJDDF7LT1WBo6f4BRe.jpg" alt="poster">
                </a>
                <p>Breaking Bad</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-1399-game-of-thrones/3624/63056" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1XS1oqL89opfnbLl8WnZY1O1uJx.jpg" alt="poster">
                </a>
                <p>Game of Thrones</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">4</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-84958-loki/114355/2534997" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rqDoCJEM3SNaX1h2PjCCVkgoql2.jpg" alt="poster">
                </a>
                <p>Loki</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-100088-the-last-of-us/144593/2181581" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uKvVjHNqB5VmOrdxqAt2F7J78ED.jpg" alt="poster">
                </a>
                <p>The Last of Us</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-40075-gravity-falls/51167/871281" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pnoGOBtkffH64hhI5GPdsQ218d1.jpg" alt="poster">
                </a>
                <p>Gravity Falls</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-31132-regular-show/42727/752728" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mS5SLxMYcKfUxA0utBSR5MOAWWr.jpg" alt="poster">
                </a>
                <p>Regular Show</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-15260-adventure-time/61205/1058803" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qk3eQ8jW4opJ48gFWYUXWaMT4l.jpg" alt="poster">
                </a>
                <p>Adventure Time</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/avatar-the-last-airbender.wjzl/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/cHFZA8Tlv03nKTGXhLOYOLtqoSm.jpg" alt="poster">
                </a>
                <p>Avatar: The Last Airbender</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/avatar-the-legend-of-korra-dub.l6o6/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/dZgYvSfuh1YHDrJuILlVQ5oA2hF.jpg" alt="poster">
                </a>
                <p>The Legend of Korra</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">4</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-77-memento" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/yuNs09hvpHVU1cBTCAk9zxsL2oW.jpg" alt="poster">
                </a>
                <p>Memento</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-1124-the-prestige" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tRNlZbgNCNOpLpbPEz5L8G8A0JN.jpg" alt="poster">
                </a>
                <p>The Prestige</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-155-the-dark-knight" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg" alt="poster">
                </a>
                <p>The Dark Knight</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-27205-inception" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oYuLEt3zVCKq57qu2F8dT7NIa6f.jpg" alt="poster">
                </a>
                <p>Inception</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-106646-the-wolf-of-wall-street" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/34m2tygAYBGqA9MXKhRDtzYd4MR.jpg" alt="poster">
                </a>
                <p>The Wolf of Wall Street</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">4.5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-496243-parasite" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg" alt="poster">
                </a>
                <p>Parasite</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/ghost-in-the-shell.4xxo/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9gC88zYUBARRSThcG93MvW14sqx.jpg" alt="poster">
                </a>
                <p>Ghost in the Shell</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-95557-invincible/136020/1987867" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/dMOpdkrDC5dQxqNydgKxXjBKyAc.jpg" alt="poster">
                </a>
                <p>Invincible</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/jujutsu-kaisen.32n8/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fHpKWq9ayzSk8nSwqRuaAUemRKh.jpg" alt="poster">
                </a>
                <p>Jujutsu Kaisen</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-tv-94605-arcane/134187/1953812" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fqldf2t8ztc9aiwn3k6mlX3tvRT.jpg" alt="poster">
                </a>
                <p>Arcane</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/attack-on-titan.kww/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hTP1DtLGFamjfu8WqjnuQdP1n4i.jpg" alt="poster">
                </a>
                <p>Attack on Titan</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">4.5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/cowboy-bebop.mvv/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xDiXDfZwC6XYC6fxHI1jl3A3Ill.jpg" alt="poster">
                </a>
                <p>Cowboy Bebop</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
            <div class="films">
                <a href="https://aniwave.to/watch/steinsgate.1rx/ep-1" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6iysgZr6Upm5RlAlVFo5f4D9euu.jpg" alt="poster">
                </a>
                <p>Steins;Gate</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">4</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-324857-spider-man-into-the-spider-verse" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/iiZZdoQBEYBv6id8su7ImL0oCbD.jpg" alt="poster">
                </a>
                <p>Spider-Man: Into the Spider-Verse</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">4.5</p>
            </div>
            <div class="films">
                <a href="https://movie-web.app/media/tmdb-movie-569094-spider-man-across-the-spider-verse" target="_blank">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg" alt="poster">
                </a>
                <p>Spider-Man: Across the Spider-Verse</p><p class="rating"><img id="star" src="<?php echo base_url(); ?>IMAGES/star-fill.png" alt="My Rating">5</p>
            </div>
        </div>
    </div>
    <div class="container-1">
        <h1 id="socials">Connect with me</h1>
        <!-- Socials  -->
        <a href="https://www.linkedin.com/in/danzielc/" target="_blank"><img id="linkedin" src="<?php echo base_url(); ?>IMAGES/linkedin-box-fill.png" alt="LinkedIn Icon">LinkedIn</a>
        <a href="https://github.com/Dnzldotexe" target="_blank"><img id="github" src="<?php echo base_url(); ?>IMAGES/github-fill.png" alt="GitHub Icon">GitHub</a>
    </div>
    <div class="container-1" style="margin-bottom: 1rem">
        <div>
            <h1>Shill me some</h1>
            <!-- Pseudo Form  -->
            <a id="link-hover" href="/lab3/ci4/public/forms" target="_blank">My Pseudo Eval Form</a>
        </div>
    </div>
    <div class="container-1">
        <h1 id="matcha" style="opacity: 1;">Buy me a Matcha</h1>
        <!-- Internet Beggar  -->
        <p>GCash - <span id="gcash">09568952244</span>
            <img style="width: 18px; margin-left: 0.3rem;" id="copy-clipboard" src="<?php echo base_url(); ?>IMAGES/file-copy-line.png" alt="Copy Icon" onclick="copyText('gcash')">
        </p>
        <p>Maya - <span id="maya">639765044618</span>
            <img style="width: 18px; margin-left: 0.3rem;" id="copy-clipboard" src="<?php echo base_url(); ?>IMAGES/file-copy-line.png" alt="Copy Icon" onclick="copyText('maya')">
        </p>
        <p style="word-break: break-all">ERC20 - <span id="erc20">0x3535b97857cf7d85c9a5ce26f05da19a24b4b2bf</span>
            <img style="width: 18px; margin-left: 0.3rem;" id="copy-clipboard" src="<?php echo base_url(); ?>IMAGES/file-copy-line.png" alt="Copy Icon" onclick="copyText('erc20')">
        </p>
    </div>
    <?php
        echo "Hey guys, <br>";
        echo "did you know that in terms of human companionship, <br>";
        echo "Flareon is objectively the most huggable Pokemon? <br>";
        echo "While their maximum temperature is likely too much for most, <br>";
        echo "they are capable of controlling it, <br>";
        echo "so they can set themselves to the perfect temperature for you. <br>";
        echo "Along with that, <br>";
        echo "they have a lot of fluff, <br>";
        echo "making them undeniably incredibly soft to touch. <br>";
        echo "But that's not all, <br>";
        echo "they have a very respectable special defense stat of 110, <br>";
        echo "which means that they are likely very calm and resistant to emotional damage. <br>";
        echo "Because of this, <br>";
        echo "if you have a bad day, <br>";
        echo "you can vent to it while hugging it, <br>";
        echo "and it won't mind. <br>";
        echo "It can make itself even more endearing with moves like Charm and Baby Doll Eyes, <br>";
        echo "ensuring that you never have a prolonged bout of depression ever again.<br>";
    ?>
    <div style="margin: 2rem 0;">
       <a id="link-hover" href="/lab3/ci4/public/resources" target="_blank">Resources</a>
    </div>
    <div id="status-bar"></div>
    <footer>
        <p>© 2023 dtcempron.</p>
    </footer>
    <!-- JavaScript  -->
    <script src="<?php echo base_url(); ?>JS/script.js"></script>
</body>
</html>
