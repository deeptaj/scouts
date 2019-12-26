<?php

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    include_once 'db_configuration.php';

    // <!-- school_id, name, description, year_founded, school_type, current_enrollment, total_students_served, mobile, 
    // website, email, address, state_name, state_code, zip_code, keywords, image_name -->

    // get the values from $_POST
    $school_id = mysqli_real_escape_string($db, $_POST['school_id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db,$_POST['description']);
    $year_founded = mysqli_real_escape_string($db,$_POST['year_founded']);
    $school_type = mysqli_real_escape_string($db,$_POST['current_enrollment']);
    $current_enrollment = mysqli_real_escape_string($db,$_POST['total_students_served']);
    $total_students_served = mysqli_real_escape_string($db,$_POST['mobile']);
    $mobile = mysqli_real_escape_string($db,$_POST['website']);
    $website = mysqli_real_escape_string($db,$_POST['website']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    //$state_name_code = mysqli_real_escape_string($db,$_POST['state_name_code']);
    $zip_code = mysqli_real_escape_string($db,$_POST['zip_code']);
    $keywords = mysqli_real_escape_string($db,$_POST['keywords']);
    $image_name = basename($_FILES["fileToUpload"]["name"]);
    
    // split the state_name_code into $state_name and $state_code
    // list($state_name, $state_code) = explode("(", $state_code_name);
    // $state_name = ltrim($state_name);
    // $state_name = rtrim($state_name);
    
    // $state_code = explode(")", $state_code)[0];
    // $state_code = ltrim($state_code);
    // $state_code = rtrim($state_code); 

    // TODO: validating the image being submitted
    $original_file= $_FILES["fileToUpload"]["name"];
    $tmp_file = $_FILES["fileToUpload"]["tmp_name"];
    $target_dir = "Images/index_images/";
    $file = basename($original_file);
    $target_file = $target_dir.$file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // it is ok to upload; start with this assumption
    //$status_code = "OK";
    
    // Check if $uploadOk is reset by an error
    //if (strcmp($status_code, "OK") == 0) {
        
    // Delete Button is clicked
    if (isset($_POST["delete_button"])){   

        //$file_moved = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        //if ($file_moved == true) {
            
            // <!-- school_id, name, description, year_founded, school_type, current_enrollment, total_students_served, mobile, 
            // website, email, address, state_name, state_code, zip_code, keywords, image_name -->

            $sql = "UPDATE schools
                SET name = '$name',
                    description = '$description',
                    year_founded = '$description',
                    school_type = '$school_type',
                    current_enrollment = '$current_enrollment',
                    total_students_served = '$total_students_served',
                    mobile = '$mobile',
                    website = '$website',
                    email = '$email',
                    address = '$address',
                    zip_code = '$zip_code',
                    keywords = '$keywords'
                WHERE school_id = '$school_id'";

                echo $sql;

            mysqli_query($db, $sql);
           exit(header('location: schools_list.php?modify_school_status=SUCCESS'));
        //}
    } 
    else {
        // otherwise, pass the status code on why create failed
        exit(header('location: schools_list.php?.php?modify_school_status=CANCEL'));
    }
    
?>