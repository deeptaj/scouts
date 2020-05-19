
<?php $page_title = 'Update School'; ?>
<?php $page_title = 'Project Access > Update School'; ?>
<?php 
    require 'bin/functions.php';
    require 'db_configuration.php';
    include('header.php'); 
    $page="schools_list.php";
   verifyLogin($page);

?>
<div class="container">
<style>#title {text-align: center; color: darkgoldenrod;}</style>

<?php
include_once 'db_configuration.php';

// get the school information from the id
if (isset($_GET['school_id'])){

    $school_id = $_GET['school_id'];
    
    $sql = "SELECT * FROM schools
            WHERE school_id = '$school_id'";
    
    $result = $db->query($sql);

    if (!$result) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if
}//end if

// populate the update form with the data

if ($result->num_rows > 0) {

      // get the $row data from the result
      $row = $result->fetch_assoc();
  
      echo '<h2 id="title">Update School</h2><br>';
      
      echo '<form action="modifyTheSchool.php" method="POST" enctype="multipart/form-data">

      <img src="images/index_images/'. $row["image_name"] . '" height="100" width="100">
      <b> Update the School "' . $row["name"] . '"? </b>
      
      <table>

      <tr>
          <td style="width:100px">School ID:</td>
          <td><input readonly type="text" name="school_id" size="5" value=' . $row["school_id"] . '></td>
      </tr>

      <tr>
          <td style="width:100px">School Name:</td>
          <td><input type="text" name="name" maxlength="100" size="100" required title="Please enter the name of the school." value= "'.$row["name"] .'"></td>
      </tr>
      
      <tr>
          <td style="width:100px">Description:</td>
          <td><textarea name="description" maxlength="500" rows="8" cols="102"> ' .$row["description"]. ' </textarea> </td>
      </tr>

      <tr>
         <td style="width:100px">Year Founded:</td>
         <td> <input type="number" id="year_input" name="year_founded" min="1920" max="2020" value="' .$row["year_founded"]. ' "></td>
      </tr>

      <tr>
          <td style="width:100px">Type of School:</td>
          <td>
            <input type="radio" name="school_type" id="public_type" value="public"> Public
            <input type="radio" name="school_type" id="private_type" value="private"> Private
            <input type="radio" name="school_type" id="ngo_type" value="ngo" checked=>NGO
            <input type="radio" name="school_type" id="other" value="other">Other
        </td>
      </tr>

      <tr>
          <td style="width:100px">Current Enrollment:</td>
          <td> <input type="number" id="current_enrollment" name="current_enrollment" min="1" max="2000" value="' .$row["current_enrollment"]. '"></td>
      </tr>

      
      <tr>
        <td style="width:100px">Total Students Served:</td>
        <td> <input type="number" id="total_students_served" name="total_students_served" min="1" max="5000" value="' .$row["total_students_served"]. '"></td>
      </tr>


      <tr>
        <td style="width:100px">Mobile Number:</td>
        <td><input type="text" name="mobile" maxlength="50" size="50" value="' .$row["mobile"]. '" ></td>
      </tr>

      <tr>
        <td style="width:100px">Web Site:</td>
        <td> <input type="url" name="website" id="website" size="50" value="' .$row["website"]. '"> </td>
      </tr>
      
      <tr>
        <td style="width:100px">Email:</td>
        <td><input type="email" name="email" maxlength="50" size="50" value="' .$row["email"]. '"></td>
      </tr>

      
      <tr>
        <td style="width:100px">Address:</td>
        <td><textarea name="address" maxlength="300" rows="7" cols="52"> ' .$row["address"]. ' </textarea> </td>
      </tr>

      <tr>
        <td style="width:100px">Pin (Zip) Code:</td>
        <td><input type="text" name="zip_code" maxlength="50" size="50" value="' .$row["zip_code"]. '"></td>
      </tr>

      <tr>
        <td style="width:100px">Key Words:</td>
        <td><input type="text" name="keywords" maxlength="100" size="50" value="' .$row["keywords"]. '"></td>
      </tr>

      </table>
      

      <div class="form-group col-md-4">
        <label for="cadence">New Image Path (Not Required)</label>
        <input type="file" name="fileToUpload" id="fileToUpload" maxlength="255">
      </div>
      <input type="hidden" class="form-control" name="oldimage" value="'.$row["image_name"].'" maxlength="255" required>
      <br>

      <div class="text-left">
        <button type="submit" name="update_button" id="update_btn" class="btn btn-primary btn-md align-items-center"> Update </button>
        <button type="submit" name="cancel_button" id="cancel_btn" class="btn btn-primary btn-md align-items-center"> Cancel </button>
      </div>

      <br> <br>
      
      </form>';
    
    }//end while
else {
    echo "0 results";
}//end else

?>

</div>


