<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/project.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
</head>
<body>
    <header>
        <div id="hamburger" class="hamburger" onclick="toggleNav(); myRotate(this);">
            <hr class="hr1">
            <hr class="hr2">
            <hr class="hr3">
        </div>
        <div class="minimize" id="minimize">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="story.php">Story</a>
            <a href="travel.php">Travel</a>
            <a href="projects.php">Projects</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav top-links">
                        <a class="navbar-brand text-white top-link home" href="index.php">Home</a>
                        <a class="nav-link text-white top-link about" href="about.php">About</a>
                        <a class="nav-link text-white top-link contact" href="contact.php">Contact</a>
                        <a class="nav-link text-white top-link story" href="story.php">Story</a>
                        <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                        <p class="title">Projects Page</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="main-section">
            <h1>Projects</h1>
            <hr>
            <div class="project">
                <h3>Web Development (Portfolio Website)</h3>
                <p>July 2021 - Present</p>
                <p>Languages used: HTML, CSS</p>
                <p>Description:</p>
                <p>This is a website that I am currently developing that will include information about myself and contact information. It is being developed using HTML, CSS, Javascript, and PHP using SQL as a database. I plan to have a React.js version as well.</p>
            </div>
            <div class="project">
                <h3><a href="https://viveroa2291.github.io/adansLinkTree/" target="_blank">Web Development - Adan's Linktree</a></h3>
                <p>July 2022 - August 2022</p>
                <p>Languages used: HTML & CSS</p>
            </div>
            <div class="project">
                <h3><a href="https://viveroa2291.github.io/Cancun/home.html" target="_blank">Web Design - Cancun</a></h3>
                <p>March 2022 - May 2022</p>
                <p>Languages used: HTML, CSS, & Javascript</p>
            </div>
            <div class="project">
                <h3>Mobile Development (Mappins)</h3>
                <p>September 2021 - December 2021</p>
                <p>Languages used: Kotlin</p>
            </div>
            <div>
                <h3>Software Engineering (Data Mining)</h3>
                <p>September 2021 - December 2021</p>
                <p>Languages used: HTML, CSS, Javascript, Python</p>
            </div>
            <div>
                <h3>Mobile Development Calculator App</h3>
                <p>September 2021 - October 2021</p>
                <p>Langauges used: Kotlin</p>
            </div>
            <div>
                <h3>Software Engineering (Patient/Doctor Data)</h3>
                <p>February 2021 - May 2021</p>
                <p>Languages used: React.js</p>
            </div>
            <div>
                <h3>Spam Filtering</h3>
                <p>February 2021 - May 2021</p>
                <p>Languages used: Python & Java</p>
            </div>
            <div>
                <h3>Web Development (Plant World)</h3>
                <p>September 2020 - December 2020</p>
                <p>Languages used: PHP, HTML, & CSS</p>
            </div>
            
        </section>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
</body>
</html>
<script src="scripts.js"></script>