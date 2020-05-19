<?php

    require 'bin/functions.php';
    require 'db_configuration.php';


?>

<?php 
    $page_title = 'Project Access > Schools'; 
?>

<?php 
    include('header.php');
    $page = "resources_list.php";
    //verifyLogin($page);
?>


<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>

<html>

<head>
<style>
table.center {
    margin-left:auto; 
    margin-right:auto;
  }


</style>
</head>

<body>
<h3 style = "color: #01B0F1;">Resources for the disabled </h3>
<br>

Explore these resources for support from Government, NGOs, and other organizations.

<br> <br>

<table style="width:400px; border: 1px solid black">
  <tr> <td> <a href="https://apdascac.ap.gov.in/About" target="_blank"> Andhra Pradesh Differently Abled and Senior Citizens Assistance Corporation (APDASCAC)  </a> </td>  </tr>

  <tr> <td> <a href="https://www.youth4jobs.org/y4j-services-to-companies.php" target="_blank"> Youth for jobs  </a> </td>  </tr>

  <tr> <td> <a href="http://www.udaan.org/parivaar/india.html#ANDHRA" target="_blank"> List of organizations in Andhra Pradesh  </a> </td>  </tr>

  <tr> <td> <a href="https://www.thehindu.com/news/cities/Vijayawada/many-challenged-youth-land-jobs-in-mela-at-alc/article30315124.ece" target="_blank"> Many challenged youth land jobs in mela at ALC  </a> </td>  </tr>

  <tr> <td> <a href="http://vikaspedia.in/social-welfare/differently-abled-welfare/policies-and-standards/rights-of-persons-with-disabilities-act-2016" target="_blank"> Rights of Persons with disabilities Act 2016  </a> </td>  </tr>
  
  

<tr> <td> <a href="https://www.nhp.gov.in/disease/non-communicable-disease/disabilities" target="_blank"> National Health Portal of India  </a> </td>  </tr>

</table>



</body>

</html>