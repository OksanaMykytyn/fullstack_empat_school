<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="../css/bootstrap.css">-->
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <header>
            <nav>
                <a href="?name=home">Головна</a>
                <a href="?name=about">Про нас</a>
                <a href="?name=contact">Контакти</a>
            </nav>
        </header>
    </header>
    <main>
        <div class="content">
            <?php

            $siteName = $_GET['name'] ?? '0';

            switch ($siteName) {
                case 'home':
                    include 'pages/home.php';
                    break;
                case 'about':
                    require_once 'pages/about.php';
                    break;
                case 'contact':
                    require_once 'pages/contact.php';
                    break;
                default:
                    require_once 'pages/form.php';
                    break;
            }
            ?>
        </div>