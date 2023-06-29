<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/index.css" />

    <title> <?= $title; ?> </title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#">Rental Mobil</a>
        </div>
        <div class="link">
            <a href="#">Home</a>
            <a href="#">Catalog</a>
            <a href="#">YouRent</a>
        </div>
    </nav>
    <div class="pembatas"></div>

    <?= $this->renderSection('content'); ?>

    <footer>Made by Team 1 Database Rental</footer>
</body>

</html>