<?php $page_title = 'Project Access > About'; ?>
<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Project Access (About) </title>
</head>
    <style>
        
        #silc {
            width: 190;
            height: 100;
        }

    </style>

<style>
    .image100 {
        width: 180px;
        height: 240px;
        padding: 20px 20px 20px 20px;
    }

    .table_2 {
        margin-left: auto;
        margin-right: auto;
    }

    #title {
        text-align: center;
        font-size: 35px;
        color: darkgoldenrod;
    }

    #table_1 {
        border-spacing: 100px 0px;
    }

    .directions {
        text-align: center;
        padding: 10px 40px 0px 40px;
        font-size: 18px;
        font-style: italic;
        color: darkgreen;
    }

    .description {
        padding: 0px 40px 0px 0px;
        color: darkgoldenrod;
        font-size: 16px;
    }

    #silc {
        width: 300;
        height: 85;
    }

    .Name {
        color: darkgreen;
        font-size: 25px;
    }
</style>

<body>
    <!--this is the tool bar-->

    <h2 id="title">About Project Access</h2>
    <h4 class="directions">This website is developed by Deepta Jasthi for the Girl Scouts Gold Award project. </h4>
</body>

<script>

    //Everyonce can fill in their own information:
    //Href is for more specific bio if they want to incorportate one.

    function Student(href, name, image_src, description) {
        this.href = href;
        this.name = name;
        this.image_src = image_src;
        this.description = description;

        this.toString = function () {
            document.write("<table class = 'table_2'>");
            document.write("<tr>");
            document.write("<td><a href ='" + this.href + "' title = '" + this.name + "'><image class = 'image100' src='" + this.image_src + "'></image></a></td>");
            document.write("<td><h2 class = 'Name'>" + this.name + "</h2><h4 class = 'description'>" + this.description + "</h4></td>");
            document.write("</tr></table>");
        }
    }

var s1 = new Student(
      "http://www.deepta.com",
      "",
      "Images/about_images/deepta1.jpg",
      "I’m Deepta Jasthi, an 18 year old student from St. Paul, Minnesota. I’ve been involved in the Girl Scouts program for over 10 years, and I came up with this idea for my Gold Award Project. <br> <br> A few years ago, I visited my grandparents in India and noticed the school when going around the city with my cousins. I came to know that it provided training for physically challenged youth, and I was curious about the kind of “training” that the school offered. This June, I went to India again and I got an opportunity to visit the school. After learning a little more about the school, its purpose and the topic of “youth with disabilities in India” I realized that there wasn’t a place that had various information about schools, training places, and job opportunities in one place, so I decided to compile the resources available onto a website. <br> <br> I thought I could make an impact by connecting different areas related to the well-being of physically handicapped youth, and help other youth my age have more education opportunities."
      );

    function printoutStudents() {
        return s1.toString();
    }

    printoutStudents();
    
</script>