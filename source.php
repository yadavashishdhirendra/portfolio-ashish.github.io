<!doctype html>
<html lang="en">

<head>
    
<?php include 'links.php';?>
    
    <title>Ashish Yadav-Portfolio</title>
</head>

<body>
    <!-- Navbar. -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">ASHISH YADAV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" id="fa" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Tech Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section id="top">
        <div class="wrapper">
        <div class="container  shadow-lg p-3 mb-5 bg-white rounded">
            <a href="sourcecode.php">previous>></a>
            <h2 class="text-center">Php Codes</h2> <hr>
            <p class="color jus">//This is the (signup) php code write in the body tag of your html document.*</p>
        <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
        <?php show_source("phpcode.php"); ?>
        </div>
        <p class="color jus">//This is the (Login) php code write in the body tag of your html document.*</p>
        <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
        <?php show_source("phpcode1.php"); ?>
        </div>
        <p class="color jus">//This is the (Database connection) php code write in it in separate folder named as connection.php*</p>
        <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
        <?php show_source("phpcode1.php"); ?>
        </div>
</div>
</div>
        </section>