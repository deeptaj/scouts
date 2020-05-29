<?php 
require 'bin/functions.php';
require 'db_configuration.php';
include('header.php'); 

?>

<html>
    <head>
        <title>Project Access</title>
    </head>
    <style>
        .image {
            width: 100px;
            height: 100px;
            padding: 20px 20px 20px 20px;
            transition: transform .2s;
        }
        .image:hover {
            transform: scale(1.2)
        }
        #table_1 {
            border-spacing: 300px 0px;
        }
        #table_2 {
            margin-left: auto;
            margin-right: auto;
        }
        #silc {
            width: 200;
            height: 110;
        }
        #welcome {
            text-align: center;
        }
        #directions {
            text-align: center;
            font-size: 17px;
        }
        #title {    
            color: black;        
            text-align: center;
        }
        a:visited, a:link, a:active {
            text-decoration: none;
        }
        #title2 {
        text-align: center;
        color: darkgoldenrod;
        }

    </style>
    <body>
    <?php
        if(isset($_GET['preferencesUpdated'])){
            if($_GET["preferencesUpdated"] == "Success"){
                echo "<br><h3 align=center style='color:green'>Success! The Preferences have been updated!</h3>";
            }
        }
    ?>
    <h1 id = "title2">Welcome to Project Access</h1>
    <h2 id = "directions"> <div> <br> <br>Project Access was created to bring together various information about schools, training places, and <div>
        job opportunities for physically challenged youth in India (specifically in the state of Andhra Pradesh). <div>
       <br> The goal is to spread awareness about people with physical impairments and the resources available to help them.

<br> <br> Please click on the “schools” tab in the menu to see a list of schools for physically challenged <div> youth across the state of Andhra Pradesh. Click on the link for each school to see more information.</h2><br>


   
    </body>
    <br><br><br><br><br><br><br>
           <a href="https://www.freecounterstat.com" title="website hit counter"><img style = "float: right;" src="https://counter3.stat.ovh/private/freecounterstat.php?c=s1nqlapdh2mu2qf3ly8zmw9kpxzk27mm" border="0" title="website hit counter" alt="website hit counter"></a>
</html>
