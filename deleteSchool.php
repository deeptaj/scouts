<?php
$page_title = 'Project Access > Delete School';

// This page fetches the details of the school and
// displays those on read-only form. 
// Gets the confirmation from the user to delete the school.
?>

<?php
  require 'bin/functions.php';
  require 'db_configuration.php';
  include('header.php');
  $page = "schools_list.php";
  verifyLogin($page);
?>
<div class="container">
  <style>
    #title {
      text-align: center;
      color: darkgoldenrod;
    }
  </style>
  <?php
  include_once 'db_configuration.php';

  if (isset($_GET['school_id'])) {

    $school_id = $_GET['school_id'];

    $sql = "SELECT * FROM schools
            WHERE school_id = '$school_id'";

    if (!$result = $db->query($sql)) {
      die('There was an error running query[' . $connection->error . ']');
    } //end if
  } //end if

  // there should be only one school with that id
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<form action="deleteTheSchool.php" method="POST">
    <br>

    <img src="images/index_images/'. $row["image_name"] . '" height="100" width="100">
    <b> Delete the School "' . $row["name"] . '"? </b>
    
    <br>
    <br>

    <table>
    
            <tr>
              <td style="width:100px">School ID:</td>
              <td><input readonly type="text" name="school_id" size="5" value=' . $row["school_id"] . '></td>
            </tr>
            <tr>
                <td style="width:100px">School Name:</td>
                <td><input readonly type="text" name="name" maxlength="100" size="100" value=' . $row["name"] . '"></td>
            </tr>
            <tr>
                <td style="width:100px">Description:</td>
                <td><textarea readonly name="description" maxlength="500" rows="8" cols="102">' . $row["description"] . '</textarea> </td>
            </tr>

            <tr>
                <td><input hidden type="text" name="image_name" value="images/index_images/'. $row["image_name"] . '"></td>
            </tr>

            <br>
    </table>


    <div class="text-left">
        <button type="submit" name="delete_button" id="delete_btn" class="btn btn-primary btn-md align-items-center"> Delete </button>
        <button type="submit" name="cancel_button" id="cancel_btn" class="btn btn-primary btn-md align-items-center"> Cancel </button>
    </div>

    <br> <br>
    
    </form>';  // end echo

    } //end while
  } //end if
  else {
    echo "0 results";
  } //end else

  ?>

</div>