<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Fajin József">
    <meta name="description" content="Profi portfólió filmekről, zenékről és sportról.">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">

    <title>Portfólió | Kezdőlap</title>
</head>
<body>

<header>
    <nav class="animate__animated animate__fadeInDown">
        <div class="nav-left">
            <a href="index.php">
                <img src="pic/logo2.png" alt="Panther Logo" class="brand-logo">
            </a>
        </div>
        <ul class="nav-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="websites.php">Websites</a></li>
            <li><a href="quotes.php">Quotes</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="songs.php">Songs</a></li>
            <li><a href="sport.php">Sport</a></li>
        </ul>
    </nav>
</header>

<main class="hero animate__animated animate__zoomIn">
    <h1 class="welcome-text">Welcome to my page</h1>

    <div class="big-clock">
        <?php
        date_default_timezone_set('Europe/Budapest');
        echo date("H:i");
        ?>
    </div>

    <div class="date-container">
        <p>Ma: <?php echo date("Y. m. d."); ?></p>
    </div>

    <blockquote>
        “You have the power to change your story.” – The Matrix
    </blockquote>

</main>

<footer class="animate__animated animate__fadeInUp">
    <p>&copy; 2026 - Készítette: Fajin József</p>
</footer>

</body>
</html>