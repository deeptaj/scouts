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

  <tr> <td> <a href="http://vikaspedia.in/social-welfare/differently-abled-welfare/policies-and-standards/rights-of-persons-with-disabilities-act-2016" target="_blank"> Rights of Persons with disabilities Act 2016  </a> </td>  </tr>
  

<tr> <td> <a href="https://www.nhp.gov.in/disease/non-communicable-disease/disabilities" target="_blank"> National Health Portal of India  </a> </td>  </tr>

</table>





</body>

</head>

<body>
<br>
<h3 style = "color: #01B0F1;">Employment Opportunities </h3>
<br>

Explore these local businesses in Andhra Pradesh that offer jobs and recruitment for youth with disabilities.

<br> <br>

<table style="width:400px; border: 1px solid black">
  <tr> <td> <a href="http://www.aegisindia.com/" target="_blank"> Aegis: logistics services to the oil, gas, and chemical industry  </a> </td>  </tr>

  <tr> <td> <a href="https://www.accenture.com/us-en" target="_blank"> Accenture  </a> </td>  </tr>

  <tr> <td> <a href="https://www.flipkart.com/" target="_blank"> Flipkart: Online shopping  </a> </td>  </tr>

  <tr> <td> <a href="https://ksml.in/" target="_blank"> Kallam: Textiles unlimited  </a> </td>  </tr>
  
</table>

</body>

</html>