<?php

$born = new DateTime('2007-02-24');
$now = new DateTime();

$age = $now->diff($born)->y;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lona</title>
</head>
<body>
    <h1>Lona</h1>
    <div id="FUCKYEAH">
        <p>BORN TO HAVE FUN</p>
        <p>WORLD IS FULL OF JOY</p>
        <p>鬼神 Lobotomize Em All 1935</p>
        <p>I am full of whimsy</p>
        <p>410,164,788 SILLY KITTIES</p>
    </div>
    <hr>
    <h2>hi im Lona <span class="small-text">she/it</span></h2>
    <p>hii, I like doing silly things like playing with computers n stuff! C: </p>
    <p>I am <?php echo $age ?> years old, like embedded programming, and astronomy</p>
    <hr>
    <h2>Projects</h2>
    <a href="https://leonaaaaaaa.github.io/googordle/">Googordle, A  wordle game where you solve 10,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000,000 wordles at the same time! </a>
</body>
</html>