<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start():; // to allow variable transfer between pages...
    include("config.php");

    // Connect to database
    $dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if(mysqli_connect_errno()) {
    echo "Connection failed:".mysqli_connect_error();
    exit;
    }

    ?>

<head>
    <meta charset="utf-8">
    <meta name="description" content="games, apps, ">
    <meta name="author" content="Toby Ayers">
    <meta name="keywords" content="games, apps, ratings">
    
    <title>Game Database</title>

    <!-- for multiple fonts change | to %7c * no spaces*  -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet">  

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/data_style.css">    <!-- custom style sheet -->

    
</head>

<body>
    
    <p class="message">Eek!  Your browser does not support grid.  Please upgrade your system.</p>
        
    <div class="wrapper">
    
        <!-- logo / small image goes here -->
        <div class="box logo">
            <a href="index.php"><img class="logo" src="images/4epgnm.jpg" width="300" height="150" alt="saul goodussy" /></a>
        </div> <!-- / logo -->
        
        <div class="box banner">
            <h1>Games Database</h1>        
        </div> <!-- / banner -->
                       
            
        <div class="box main">
            <h2>Welcome</h2>
            
            
            <p>
                Put link to original dataset here
            </p>
            

            
        </div> <!-- / main -->
        
        <div class="box side">
           
           <h2>Search Area</h2>
           
           <p>This is where the search area goes

            
        </div> <!-- / side bar -->
        
        <div class="box footer">
            CC TCA 2022
        </div> <!-- / footer -->
                
        
    </div> <!-- / wrapper -->
    
            
</body>