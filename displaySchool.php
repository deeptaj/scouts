<?php
    // start output buffering
    ob_start();

    // this page is a simple router
    // if the URL exists, it opens the URL
    // if the URL doesn't exist, then it displays the default view only page
    $page_title = "Project Access > " . $_GET['school_id'] . " School";
    require 'bin/functions.php';
    require 'db_configuration.php';

    $school_id = $_GET['school_id'];
    $sql = "SELECT website FROM schools WHERE school_id = '$school_id'";
    $result_set = mysqli_query($db,$sql);
    $row_array = mysqli_fetch_assoc($result_set);
    
    $url = $row_array["website"];

    //echo $url;

    if(@file($url))  // url exists
    {
        header( 'Content-type: text/html; charset=utf-8' );
        header('location: ' . $url);
        echo "<html></html>";  // - Tell the browser there the page is done
    flush();               // - Make sure all buffers are flushed
    ob_flush();            // - Make sure all buffers are flushed
    exit;                  // - Prevent any more output from messing up the redirect
        //echo "<script>window.open(".$url.");</script>";

    }
    else // url doesn't exist, go to default page
    {
        exit(header('location:displayTheSchool.php?school_id='.$school_id));
    }
?>
