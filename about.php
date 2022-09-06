<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/about.css';
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
            <a href="story.php">Experience</a>
            <a href="projects.php">Projects</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav top-links">
                        <a class="navbar-brand text-white top-link home" href="index.php">Home</a>
                        <a class="nav-link text-white top-link about" href="about.php">About</a>
                        <a class="nav-link text-white top-link story" href="story.php">Experience</a>
                        <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                        <p class="title">About Page</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="picture">
            <img src="images/mount-rushmore.jpeg" alt="Picture of me">
        </div>
        <h1 class="page-title">About Me</h1>
        <hr class="header-hr">
        <div class="intro">
            <p>Hello,</p>
            <p>My name is Adan Vivero. I currently reside in Madison Wisconsin, however have residency in the northwest suburb of Chicago, Mount Prospect. 
            <br><br>
            Currently graduated from the University of Wisconsin-Eau Claire with a degree in computer science and am seeking for a web development, mobile app development, or software engineering job. The languages I am most comfortable working with include HTML, CSS, Javascript, PHP, Java, and C++.
            <br><br>
            I am looking for an opportunity to work as a Web Developer, App Developer, or Software Engineer.
            <br><br>
            I am in the Madison, Wisconsin area currently BUT also have a place in the northwest suburbs of Chicago and open to work in the greater Chicago area. I am also open to any remote work.
            </p>
        </div>
        <section class="education">
            <div>
                <h2 class="header">Education</h2>
                <div>
                <span class="education-div">
                    <?php 
                        include_once 'eau-claire.php';
                    ?> 
                    <h3 class="education-header">University of Wisconsin - Eau Claire</h3>
                </span>
                    <p class="education-dates">September 2018 - May 2022</p>                
                    <p>Bachelors of Science - Computer Science</p>
                    <hr>
                </div>
                <div>
                    <span class="education-div">
                    <?php 
                        include_once 'harper.php';
                    ?>  
                    <h3 class="education-header">Harper College</h3>
                </span>
                    <p class="education-dates">August 2016 - May 2018</p>
                    <hr>
                </div>
                <div>
                <span class="education-div">
                    <?php 
                        include_once 'prospect.php';
                    ?>   
                    <h3 class="education-header">Prospect High School</h3>
                </span>
                    <p class="education-dates">August 2012 - June 2016</p>
                    <hr>
                 </div>
            </div> 
            <h2 class="header">Skills</h2>
            <div class="skills">
                <h3 class="type">Markup Langauges</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                </ul>
                <h3 class="type">Programming Languages</h3>
                <ul>
                    <li>Java</li>
                    <li>C++</li>
                    <li>C</li>
                    <li>PHP</li>
                    <li>Kotlin</li>
                    <li>Python</li>
                    <li>Javascript</li>
                </ul>
                <h3 class="type">Databases</h3>
                <ul>
                    <li>SQL</li>
                    <li>myPHPAdmin</li>
                    <li>Google Firebase</li>
                </ul>
                <h3 class="type">Tools</h3>
                <ul>
                    <li>Android Studio</li>
                    <li>Visual Studio</li>
                    <li>InteliJ</li>
                    <li>Xcode</li>
                    <li>Github</li>
                    <li>Gitlab</li>
                    <li>Jira</li>
                    <li>Apple Numbers</li>
                </ul>
                <h3 class="type">Other</h3>
                <ul>
                    <li>Customer Service</li>
                    <li>Coaching / Teaching</li>
                    <li>Spanish</li>
                    <li>Figma</li>
                    <li>Adobe Illustrator</li>
                </ul>
            </div>
        </section>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
</body>
</html>
<script src="scripts.js"></script>