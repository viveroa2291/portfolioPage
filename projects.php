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
                        <p class="title">Projects Page</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="picture">
            <img src="images/minneapolis.jpeg" alt="Picture of me">
        </div>
        <h1 class="page-title">Projects</h1>
        <hr class="header-hr">
        <section class="main-section">
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://github.com/viveroa2291/portfolioPage">Web Development (Portfolio Website)</a></h3>
                <p class="project-date">July 2021 - Present</p>
                <p>Languages Used: HTML, CSS, & Javascript</p>
                <p>Description:</p>
                <p class="description">This is a website that I am currently developing that will include information about myself and contact information. It is the website you are on currently. It will also include a job history, skills, and projects which is the page you are on right now. <br><br> I plan to have a React.js version in the future as well.</p>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://viveroa2291.github.io/adansLinkTree/" target="_blank">Web Development - Adan's Linktree</a></h3>
                <p class="project-date">July 2022 - August 2022</p>
                <p>Languages used: HTML & CSS</p>
                <p>Description:</p>
                <p class="description">Created a Linktree myself using HTML and CSS.</p>
                <ul>
                    <li class="description">This ties all of my networking and social media sites onto one web page for users to follow.</li>
                </ul>
                <a class="description link" href="https://github.com/viveroa2291/adansLinkTree" target="_blank">Link to the code:</a>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://viveroa2291.github.io/Cancun/home.html" target="_blank">Web Design - Cancun</a></h3>
                <p class="project-date">March 2022 - May 2022</p>
                <p>Languages Used: HTML, CSS, & Javascript</p>
                <p>Description:</p>
                <p class="description">This was a school assignment of creating a website for a business where the business I chose was a local Mexican restaurant located in Eau Claire, Wisconsin area. <br> <br>
                In it, I applied HTML, CSS, and Javascript among all of the pages where I displayed a home, menu, events, contact, and about page. </p>
                <ul>
                    <li class="description">The home page provides an overview of the website and what can be found on it. </li>
                    <li class="description">The menu page provides the menu of the restaurant along with pictures, price, and description about it. </li>
                    <li class="description">The contact page provides the locations along with a map that was used with google, phone numbers, and social media page. </li>
                    <li class="description">The about page provides a brief description of the restaurants. </li>
                    <li class="description">The events page provides information on upcoming events. </li>
                </ul>
                <a class="description link" href="https://github.com/viveroa2291/Cancun" target="_blank">Link to the code</a>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://github.com/xyzqsrbo/GroupProject">Mobile Development (Mappins)</a></h3>
                <p class="project-date">September 2021 - December 2021</p>
                <p>Languages Used: Kotlin</p>
                <p>Description:</p>
                <p class="description">Mappins was a social media app that was developed for a school group project. The app resembled Snapchat and Instagrams map feature. The purpose of Mappins was to allow users to sign up and have a profile where they could upload images and pin that onto a map with a description of the image and where that image was taken. Other users would then interact with the posts and drop 'likes' or 'dislikes' on the post. 
                <br>
                <br>
                The app was developed in Android Studio using Kotlin and Google's Firebase cloud storage as a database. My primary roles was creating the uploading a post and viewing the page sections.</p>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://gitlab.com/romeygg3110/485-group-7/-/tree/master">Software Engineering (Data Mining)</a></h3>
                <p class="project-date">September 2021 - December 2021</p>
                <p>Languages Used: HTML, CSS, Javascript, Python</p>
                <p>Description:</p>
                <p class="description">This was a group project for school where we would provide data for travel agencies. The companies would have vacation bundles for consumers where we would implement data mining techniques to provide for the companies. It also provided a site for an admin to login and a user to be able to view their reports, add packages, add reviews, and etc. 
                <br>
                <br>
                The site was created using HTML, CSS, and Javascript running on a tomcat server. For the data mining, we used python and SQL for the database. My role was the frontend.</p>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://github.com/viveroa2291/KotlinCalculatorApp">Mobile Development Calculator App</a></h3>
                <p class="project-date">September 2021 - October 2021</p>
                <p>Langauges Used: Kotlin</p>
                <p>Description:</p>
                <p class="description">This is a calculator app that I made individually for a school project. It was developed in Android Studio using the Kotlin programming language. It functions as a basic calculator with an exponent button included.</p>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://gitlab.com/team-alpaca/team-alpaca-project-webapp/-/commits/master">Software Engineering (Patient/Doctor Data)</a></h3>
                <p class="project-date">February 2021 - May 2021</p>
                <p>Languages Used: React.js</p>
                <p>Description:</p>
                <p class="description">This was a school group project where we would create a software for hospital. In it, we would provide a profile for a doctor where the doctor would be given access to create new patients, schedule appointments, and add notes. It would also store patient data and would be graphed in a chart to view progression. 
                <br>
                <br>
                This was done using React.js, bootstrap as the framework, chart.js for the graphing, and MongoDB for the database. My contributions to this was the front-end development and the charts.</p>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://github.com/AllWillPower/CS376CryptoProject">Spam Filtering</a></h3>
                <p class="project-date">February 2021 - May 2021</p>
                <p>Languages Used: Python & Java</p>
                <p>Description:</p>
                <p class="description">This was a school project where we would filter out spam using Naive Bayes algorithm for spam filtering. A user would type a message and our algorithm would parse that message and filter out any repetitive words a calculate the likelihood that it would contain spam. 
                <br>
                <br>
                This was developed with Java to implement Naive Bayes algorithm and using SQL to be the database.</p>
                <hr>
            </div>
            <div class="project">
                <h3 class="project-name"><a class="project-link" href="https://github.com/viveroa2291/plantWorld">Web Development (Plant World)</a></h3>
                <p class="project-date">September 2020 - December 2020</p>
                <p>Languages Used: PHP, HTML, & CSS</p>
                <p>Description:</p>
                <p class="description">The Plant World website was a website that a partner and I developed for a school project using HTML, CSS, Javascript, and PHP. The purpose for this website was for users to visit the website and read about different plants types and learn how they could be displayed around their home. The different pages also included a monthly poll and a shopping site where they could click through a variety of plants and visit the direct link of that purchase.</p>
                <hr>
            </div>
        </section>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
</body>
</html>
<script src="scripts.js"></script>