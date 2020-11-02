<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_DIR;?>assets/css/style.css">
    <title>TPI -render con OOP-</title>
</head>
<body>
    <header>
        <nav>
            <h1>
                <a href="home.php">
                    PHP ORIENTADO A OBJETOS
                </a>
            </h1>
        
            <ul>
                <li><a href="<?=BASE_DIR?>Home/showHome">Home</a></li>
                <li><a href="<?=BASE_DIR?>Usuario/register">Register</a></li>
                <li><a href="<?=BASE_DIR?>About/showAbout">About</a></li>
                <li><a href="<?=BASE_DIR?>Contact/showContact">Contact</a></li>
            </ul>
        </nav>
    </header>
