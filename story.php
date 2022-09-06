<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/styles.css';
        include 'CSS/story.css';
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
                        <p class="title">Experience Page</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="picture">
            <img src="images/henderson.jpeg" alt="Picture of me">
        </div>
        <h1 class="page-title">Job List</h1>
        <hr class="header-hr">
        <section class="main-section">
            <div class="job">
                <h3 class="job-name">DoorDash - Food Delivery</h3> 
                <p class="job-location">Greater Chicago Area / Greater Madison Area</p>
                <p class="job-date">July 2021 - Present</p>
                <svg class="doordash" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>DoorDash</title><path d="M23.071 8.409a6.09 6.09 0 00-5.396-3.228H.584A.589.589 0 00.17 6.184L3.894 9.93a1.752 1.752 0 001.242.516h12.049a1.554 1.554 0 11.031 3.108H8.91a.589.589 0 00-.415 1.003l3.725 3.747a1.75 1.75 0 001.242.516h3.757c4.887 0 8.584-5.225 5.852-10.413" fill="red"></path></svg>
                <p>Responsibilities:</p>
                <p class="description">Pick up, drop off, and made sure all of customers' items were included in the order when providing efficient deliveries. Worked during very busy hours during rush hour, which included shifts past midnights. Learned time management while delivering more than one order in order to bring adequate customer satisfaction. Maintained a status of 96% of deliveries being on time with a 4.92 customer rating. Flexibility of choosing my own hours, while also being able to simultaneously engage in activities I enjoy such as listening to podcasts and music.</p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">Shopbop - Amazon</h3>
                <p class="job-location">Monona, Wisconsin</p>
                <p class="job-date">June 2022 - August 2022</p>
                <?php 
                    include_once 'shopbop.php';
                ?>
                <p>Responsibilities:</p>
                <p class="description">Worked in the Shopbop warehouse performing warehouse tasks such as stowing, catching, and liquidating. Also worked on some ICQA tasks such as assembling boxes.</p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">Amazon Fulfillment Center - Pit/Stowing/Packaging</h3>
                <p class="job-location">Aurrora, Illinois</p>
                <p class="job-date">June 2020 - July 2021</p>
                <?php 
                    include_once 'amazon.php';
                ?>
                <p>Responsibilities:</p>
                <p class="description">
                <ul>
                    <li>Picker - Drove around in a pit (forklift) picking items off shelves reaching up to 40 feet up in the air and dropping it off to the packagers.</li>
                    <li>Stowing - Drove around in a pit (forklift) and stowed items onto the shelves reaching up to 40 feet in the air.</li>
                    <li>Packaging - Packaged items for them to be loaded for the trucks.</li>
                </ul>    
                </p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">Marks Construction - Masonry Construction</h3>
                <p class="job-location">Greater Chicago Area</p>
                <p class="job-date">June 2019 - August 2019</p>
                <img class="construction" src="images/construction.jpeg" alt="Construction">
                <p>Responsibilities:</p>
                <p class="description">
                    <ul>
                        <li>Tuck pointing</li>
                        <li>Brickwork</li>
                        <li>Masonry work</li>
                        <li>Lintel replacements.</li>
                    </ul>
                </p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">AtHome - Customer Associate</h3>
                <p class="job-location">Schaumburg, Illinois</p>
                <p class="job-date">October 2017 - February 2019</p>
                <?php 
                    include_once 'athome.php';
                ?>
                <p>Responsibilities:</p>
                <p class="description">Worked various positions around the store including:
                <ul>
                    <li>Cash Register</li>
                    <li>Freight</li>
                    <li>Unloading trucks</li>
                    <li>Organizing sections</li>
                    <li>Seasonal decorations</li>
                    <li>Closing tasks (sweeping, bathrooms, mopping, etc).</li>
                </ul>
                </p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">YMCA - Camp Counselor</h3>
                <p class="job-location">Des Plaines, Illinois</p>
                <p class="job-date">June 2018 - August 2018</p>
                <?php 
                    include_once 'ymca.php';
                ?>
                <p>Responsibilities:</p>
                <p class="description">
                    Would watch the campers for the summer setting up games, going to field trips and making sure everyone was safe but also engaging with the children in the activities we were doing.
                </p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">Lutheran Home - Waitstaff</h3>
                <p class="job-location">Arlington Heights, Illinois</p>
                <p class="job-date">February 2018 - May 2018</p>
                <p>Responsibilities:</p>
                <p class="description">
                    <ul>
                        <li>Served food</li>
                        <li>Took Orders</li>
                        <li>Vacuumed</li>
                        <li>Mopped</li>
                        <li>Disposal of Garbage</li>
                        <li>Certified in food handling</li>
                    </ul>
                </p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">SportKids - Teacher/Coach</h3>
                <p class="job-location">Chicago Northwest Suburbs</p>
                <p class="job-date">June 2016 - August 2017</p>
                <p>Responsibilities:</p>
                <p class="description">
                    <ul>
                        <li>Demonstrated flexibility by working in several towns and park districts on a daily basis.</li>
                        <li>Created ideas for games in each sport or activity to add a fresh environment each session.</li>
                        <li>Displayed the ability to lead classes and train new employees to lead on their own.</li>
                        <li>Stressed teamwork, leadership, skill development, and the importance of having fun to children and young adults.</li>
                        <li>Devoted time and effort tailored to each child, while making sure the class ran smoothly.</li>
                        <li>Always enforced safety first and proper procedures in case of an accident or injury.</li>
                    </ul>
                </p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">Little Ceasars</h3>
                <p class="job-location">Mount Prospect, Illinois</p>
                <p class="job-date">February 2016 - May 2016</p>
                <?php 
                    include_once 'little-ceasar.php';
                ?> 
                <p>Responsibilities:</p>
                <p class="description">Was on the assembly line preparaing pizzas. Would close the store some nights performing all night work duties.</p>
                <hr>
            </div>
            <div class="job">
                <h3 class="job-name">McDonald's</h3>
                <p class="job-location">Des Plaines, Illinois</p>
                <p class="job-date">June 2015 - February 2016</p>
                <?php 
                    include_once 'mcdonalds.php';
                ?> 
                <p>Responsibilities:</p>
                <p class="description">
                    <ul>
                        <li>Cashier - Worked cash register taking orders and handling money.</li>
                        <li>Drive-Thru - Took orders from the drive-thru on the drive-thru cash register.</li>
                    </ul>
                </p>
                <hr>
            </div>
        </section> 
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
    <script>
    <?php
        include 'scripts.js';
    ?>
    </script>
</body>
</html>