<?php $page_title = 'Project Access > Create School'; ?>
<?php
require 'bin/functions.php';
require 'db_configuration.php';
include('header.php');
$page = "Schools_list.php";
//verifyLogin($page);

?>


<?php

$indian_all_states  = array(
    'AP' => 'Andhra Pradesh',
    'AR' => 'Arunachal Pradesh',
    'AS' => 'Assam',
    'BR' => 'Bihar',
    'CT' => 'Chhattisgarh',
    'GA' => 'Goa',
    'GJ' => 'Gujarat',
    'HR' => 'Haryana',
    'HP' => 'Himachal Pradesh',
    'JK' => 'Jammu & Kashmir',
    'JH' => 'Jharkhand',
    'KA' => 'Karnataka',
    'KL' => 'Kerala',
    'MP' => 'Madhya Pradesh',
    'MH' => 'Maharashtra',
    'MN' => 'Manipur',
    'ML' => 'Meghalaya',
    'MZ' => 'Mizoram',
    'NL' => 'Nagaland',
    'OR' => 'Odisha',
    'PB' => 'Punjab',
    'RJ' => 'Rajasthan',
    'SK' => 'Sikkim',
    'TN' => 'Tamil Nadu',
    'TS' => 'Telangana',
    'TR' => 'Tripura',
    'UK' => 'Uttarakhand',
    'UP' => 'Uttar Pradesh',
    'WB' => 'West Bengal',
    'AN' => 'Andaman & Nicobar',
    'CH' => 'Chandigarh',
    'DN' => 'Dadra and Nagar Haveli',
    'DD' => 'Daman & Diu',
    'DL' => 'Delhi',
    'LD' => 'Lakshadweep',
    'PY' => 'Puducherry',
);
?>


<link href="css/form.css" rel="stylesheet">

<style>
    #title {
        text-align: center;
        color: darkgoldenrod;
    }
</style>

<div class="container">
    <?php
    if (isset($_GET['createSchool'])) {
        if ($_GET["createSchool"] == "fileRealFailed") {
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not real, Please Try Again!</h3>';
        }
    }
    if (isset($_GET['createSchool'])) {
        if ($_GET["createSchool"] == "answerFailed") {
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your answer was not one of the choices, Please Try Again!</h3>';
        }
    }
    if (isset($_GET['createSchool'])) {
        if ($_GET["createSchool"] == "fileTypeFailed") {
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image is not a valid image type (jpg,jpeg,png,gif), Please Try Again!</h3>';
        }
    }
    if (isset($_GET['createSchool'])) {
        if ($_GET["createSchool"] == "fileExistFailed") {
            echo '<br><h3 align="center" class="bg-danger">FAILURE - Your image does not exist, Please Try Again!</h3>';
        }
    }

    ?>
    <form action="createTheSchool.php" method="POST" enctype="multipart/form-data">
        <br>
        <h3 id="title">Create A School</h3> <br>

        <!-- school_id, name, description, year_founded, school_type, current_enrollment, total_students_served, mobile, 
        website, email, address, state_name, state_code, zip_code, keywords, image_name -->


        <table>
            <tr>
                <td style="width:100px">School Name:</td>
                <td><input type="text" name="name" maxlength="100" size="100" placeholder="enter the name of the school" required title="Please enter the name of the school."></td>
            </tr>

            <tr>
                <td style="width:100px">Description:</td>
                <td><textarea name="description" maxlength="500" rows="8" cols="102" placeholder="provide brief description" required title="Please enter brief description.">  </textarea> </td>
            </tr>

            <tr>
                <td style="width:100px">Year Founded:</td>
                <td> <input type="number" id="year_input" name="year_founded" min="1920" max="2020" value="1990"></td>
            </tr>

            <tr>
                <td style="width:100px">Type of School:</td>
                <td>
                    <input type="radio" name="school_type" id="public_type" value="public"> Public
                    <input type="radio" name="school_type" id="private_type" value="private"> Private
                    <input type="radio" name="school_type" id="ngo_type" value="ngo" checked>NGO
                    <input type="radio" name="school_type" id="other" value="other">Other
                </td>
            </tr>
            <tr>
                <td style="width:100px">Current Enrollment:</td>
                <td> <input type="number" id="current_enrollment" name="current_enrollment" min="1" max="2000" value="10"></td>
            </tr>

            <tr>
                <td style="width:100px">Total Students Served:</td>
                <td> <input type="number" id="total_students_served" name="total_students_served" min="1" max="5000" value="10"></td>
            </tr>


            <tr>
                <td style="width:100px">Mobile Number:</td>
                <td><input type="text" name="mobile" maxlength="50" size="50" title="Please enter the mobile number."></td>
            </tr>

            <tr>
                <td style="width:100px">Web Site:</td>
                <td> <input type="url" name="website" id="website" size="50" value="http://scouts.icsbin.com/generic.html"> </td>
            </tr>
            <tr>
                <td style="width:100px">Email:</td>
                <td><input type="email" name="email" maxlength="50" size="50" title="Please enter the email."></td>
            </tr>
            <tr>
                <td style="width:100px">Address:</td>
                <td><textarea name="address" maxlength="300" rows="7" cols="52" placeholder="provide the address" title="Please enter brief description.">  </textarea> </td>
            </tr>
            <tr>
                <td style="width:100px">State Name:</td>
                <td>
                    <select id="state_name_code" name="state_name_code">
                        <?php
                        foreach ($indian_all_states as $key => $value) {
                            $lov_value = ($value . " (" . $key . ")");
                            echo '<option value=' . '$lov_value' . '>' . $lov_value . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <!-- <tr>  Get this from State Name;
                <td style="width:100px">State Code:</td>
                <td><input type="text"  name="state_code" maxlength="2" size="2"  title="Please enter two letter state code."></td>
            </tr> -->
            <tr>
                <td style="width:100px">Pin (Zip) Code:</td>
                <td><input type="text" name="zip_code" maxlength="50" size="50" title="Please pin (zip) code."></td>
            </tr>
            <tr>
                <td style="width:100px">Key Words:</td>
                <td><input type="text" name="keywords" maxlength="100" size="50" value="blind" title="Please enter key words (comma separated)."></td>
            </tr>
            <tr>
                <td style="width:100px">Image/Logo:</td>
                <td><input type="file" name="fileToUpload" id="fileToUpload" maxlength="50" size="50" title="Please enter the Image Name."></td>
            </tr>
        </table>

        <br><br>
        <div align="center" class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create School</button>
        </div>
        
    </form>
</div>