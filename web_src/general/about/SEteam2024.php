<?php
$pageName = "Jane Doe's Webpage";
require "../../includes/functions.php";
require "../../includes/head.php";

?>

<body>
    <?php
    require "../../includes/navbar.php";
    ?>
    <div class="buttons">
        <a href="../about.php"><button class="button button2">Go Back!</button></a>
    </div>

    <div class="team-section">

        <div id="welcome-text">THE 2024 SOFTWARE ENGINEERING TEAM</div>
        <br>
        <div class="section"> This project was taken on and continued by the Fall 2024 Software Engineering class. <BR></div>
        <br>
        <div class="pfp">
            <img id="Team2024Pic" src="../teampics/SEteam2024.png" alt="2024 Team to Come picture." width=1000>
        </div>

        <div class="section" id="team-names">
            <!-- <span class="name">From Left to Right: </span>  -->
            <span class="name">
                Kevin Barbieri, Joseph Culkin, Brian Duva, Parker Engle,
                Leif Hoffman, Cameron Hollabaugh, Laney Humble, James Hutchins,
                Muzahidul Islam, Vincent Lu, John McGovern, Jackson Miller,
                Mildred Nwachukwu-Innocent, Martin Ratchford, Alexander Roop, Wesley Ryan,
                Joshua Schmitt, Ian Skeete, Austin Smith, Matthew Smith,
                Tyler Souders, Joshua Stoner, Camila Torres, Joey Wagner,
<<<<<<< HEAD
                Asher Wayde, <a href='OwenWertzberger.php'>Owen Wertzberger</a> Owen Yang, and <a href='student_template.php'>Jane Doe</a>
=======
                Asher Wayde, <a href='OwenWertzberger.php'>Owen Wertzberger</a>, Owen Yang, and <a href='student_template.php'>Jane Doe</a>
>>>>>>> 76db833 (Added link to student page (with comma))
            </span>
        </div>
    </div>
    <?php
    require "../../includes/footer.php";
    ?>
</body>

</html>