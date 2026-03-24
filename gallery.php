<?php

$imagepath = dirname(__FILE__) . '/images/gallery';
$jpgFiles = glob($imagepath . '/*.{jpg,jpeg,JPG,JPEG}', GLOB_BRACE);
$jpgFilenames = array_map('basename', $jpgFiles);
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
    <header>
        <h1>Lona's Gallery</h1>
        <a href="index.php">Back to homepage</a>
    </header>
    <div id="gallery">
        <?php 
            foreach ($jpgFilenames as $filename) {
                echo "<img loading='lazy' class='gallery-image pointy' src='images/gallery/$filename' alt='$filename'>";
            }
        ?>
    </div>
    <script src="gallery.js"></script>
</body>
</html>