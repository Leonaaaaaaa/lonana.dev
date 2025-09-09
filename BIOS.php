<?php

$born = new DateTime('2007-02-24');
$now = new DateTime();

$age = $now->diff($born)->y;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content='KLBR "Lona"' />
    <meta property="og:description" content="meow" />
    <meta property="og:url" content="https://lonana.dev" />
    <meta property="og:type" content="website" />

    <link rel="stylesheet" href="BIOS.css" />
    <title>Lona</title>
</head>

<body>
    <header>
        <h1>Generation 5 KOMMANDO-LEITEINHEIT BIORESONANZTECHNIK REPLIKA</h1>
        <nav>
            <button class="red">Hauptmenü</button>
            <button>About Me</button>
            <button>Projects</button>
            <button>Games</button>
            <button>Contact</button>
            <button>88x31</button>
        </nav>
    </header>

    <main>
        <section id="Hauptmenu">
            <div class="warning">
                <h1 class="red">WARNUNG!!!</h1>
                <p>Folgende Komponenten fehlen</p>
                <p>Lokomotor: <span class="red">FEHLEN</span></p>
                <p>Manipulator: <span class="red">FEHLEN</span></p>
            </div>
        </section>

        <section id="about-me">
            <div>
                <h2>About me</h2>
                <p>Hello! I tend to dabble in anything nerdy or tech-related and I plan for this website to be a source for all my projects</p>
                <p>On the internet I go by Lona, I am an <?php echo $age; ?> year old student who likesplaying with programmable doohickeys such as computers</p>
                <p>Also if you feel like it, sign my <a rel="noopener noreferrer" href="https://lona.atabook.org/">guestbook</a>!</p>
            </div>
            <div>
                <h2>My interests</h2>
                <ul>
                    <li>Programming</li>
                    <li>HAM Radio</li>
                    <li>(Astro)photography</li>
                    <li>Astronomy</li>
                    <li>Virtual reality</li>
                    <li>Cats</li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://en.wikipedia.org/wiki/Special:Random">Wikipedia</a> doomscrolling</li>
                    <li>Whatever else I suddenly take an unusual amount of interest in</li>
                </ul>
            </div>
        </section>
        <section id="projects"></section>
        <section id="games"></section>
        <section id="contact"></section>
        <section id="badge"></section>
    </main>
</body>
<script src="script.js"></script>

</html>