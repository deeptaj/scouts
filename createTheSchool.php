<?php

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    include_once 'db_configuration.php';

    // <!-- school_id, name, description, year_founded, school_type, current_enrollment, total_students_served, mobile, 
    // website, email, address, state_name, state_code, zip_code, keywords, image_name -->

    // get the values from $_POST
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db,$_POST['description']);
    $year_founded = mysqli_real_escape_string($db,$_POST['year_founded']);
    $school_type = mysqli_real_escape_string($db,$_POST['school_type']);
    $current_enrollment = mysqli_real_escape_string($db,$_POST['current_enrollment']);
    $total_students_served = mysqli_real_escape_string($db,$_POST['total_students_served']);
    $mobile = mysqli_real_escape_string($db,$_POST['mobile']);
    $website = mysqli_real_escape_string($db,$_POST['website']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $state_name_code = mysqli_real_escape_string($db,$_POST['state_name_code']);
    $zip_code = mysqli_real_escape_string($db,$_POST['zip_code']);
    $keywords = mysqli_real_escape_string($db,$_POST['keywords']);
    $image_name = basename($_FILES["fileToUpload"]["name"]);

    // split the state_name_code into $state_name and $state_code
    list($state_name, $state_code) = explode("(", $state_code_name);
    $state_name = ltrim($state_name);
    $state_name = rtrim($state_name);
    
    $state_code = explode(")", $state_code)[0];
    $state_code = ltrim($state_code);
    $state_code = rtrim($state_code); 

    // validating the image being submitted
    $original_file= $_FILES["fileToUpload"]["name"];
    $tmp_file = $_FILES["fileToUpload"]["tmp_name"];
    $target_dir = "Images/index_images/";
    $file = basename($original_file);
    $target_file = $target_dir.$file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    echo $file;
    echo $target_file;

    // it is ok to upload; start with this assumption
    $status_code = "OK";

    // Check if image file is a actual image or fake image
    $image = getimagesize($tmp_file) ? true : false;
    if ($image == false) {
        $status_code = "NOT_AN_IMAGE";
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $status_code = "IMAGE_IS_ALREADY_USED";
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $status_code = "FILE_IS_TOO_BIG";
    }
    // check for the file type (jpg, png, jpeg and gif are allowed) 
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $status_code = "UNSUPPORTED_FILE_TYPE";
    }  

    // check if the file is empty
    // users can leave the field blank
    if ($original_file == '')
    {
        $image_name="generic_logo.jpg";
        $status_code = "OK";
    }
    
    
    // Check if $uploadOk is reset by an error
    if (strcmp($status_code, "OK") == 0) {
        $file_moved = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        if ($file_moved == true) {
            
            // <!-- school_id, name, description, year_founded, school_type, current_enrollment, total_students_served, mobile, 
            // website, email, address, state_name, state_code, zip_code, keywords, image_name -->

            $sql = "INSERT INTO schools (name, description, year_founded, school_type, 
                        current_enrollment, total_students_served,
                        mobile, website, email, address, state_name, 
                        state_code, zip_code, keywords, image_name)
                    VALUES ('$name','$description','$year_founded','$school_type',
                        '$current_enrollment','$total_students_served',
                        '$mobile','$website', '$email',  '$address', '$state_name', 
                        '$state_code', '$zip_code', '$keywords', '$image_name');
                    ";
            mysqli_query($db, $sql);
            exit(header('location: schools_list.php?create_school_status=SUCCESS'));
        }
    } 
    else {
        // otherwise, pass the status code on why create failed
        exit(header('location: createSchool.php?.php?create_school_status='.$status_code));
    }
    
?>