<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    include_once 'db_configuration.php';

    // Delete Button is clicked
    if (isset($_POST["delete_button"])){
        if (isset($_POST['school_id'])){    
            // delete the school from the table
            $school_id = mysqli_real_escape_string($db, $_POST['school_id']);
            $sql = "DELETE FROM schools  WHERE school_id = '$school_id'";
            mysqli_query($db, $sql);
            
            // delete the local logo (image file)
            $file = mysqli_real_escape_string($db, $_POST['image_name']);
            if (file_exists($file)) {
                unlink($file);
            }
        
            // send the control to the school list with success message
            // TODO: interecept this message later
            header('location: schools_list.php?schoolDeleted=Success');
        }//end if
    } 

    else  {
        // Cancel button is clicked
        // send the control to the school list with cancel message
        header('location: schools_list.php');
    }
?>

