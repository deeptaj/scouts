<?php

    require 'bin/functions.php';
    require 'db_configuration.php';

    $query = "SELECT * FROM schools";

    $GLOBALS['id'] = mysqli_query($db, $query);

?>

<?php 
    $page_title = 'Project Access > Schools'; 
?>

<?php 
    include('header.php');
    $page = "schools_list.php";
    //verifyLogin($page);
?>

<style>
    #title {
        text-align: center;
        color: darkgoldenrod;
    }

    thead input {
        width: 100%;
    }

    #silc {
            width: 200;
            height: 110;
    }

    .thumbnailSize {
        height: 100px;
        width: 100px;
        transition: transform 0.25s ease;
    }

    .thumbnailSize:hover {
        -webkit-transform: scale(3.5);
        transform: scale(3.5);
    }
</style>

<!-- Page Content -->
<br><br>
<div class="container-fluid">
    <?php
    if (isset($_GET['createSchool'])) {
        if ($_GET["createSchool"] == "Success") {
            echo '<br><h3>Success! Your School has been added!</h3>';
        }
    }

    if (isset($_GET['SchoolUpdated'])) {
        if ($_GET["SchoolUpdated"] == "Success") {
            echo '<br><h3>Success! Your School has been modified!</h3>';
        }
    }

    if (isset($_GET['SchoolDeleted'])) {
        if ($_GET["SchoolDeleted"] == "Success") {
            echo '<br><h3>Success! Your School has been deleted!</h3>';
        }
    }

    if (isset($_GET['createTopic'])) {
        if ($_GET["createTopic"] == "Success") {
            echo '<br><h3>Success! Your topic has been added!</h3>';
        }
    }
    ?>

    <h2 id="title">School List</h2><br>

    <div id="customerTableView">
        <?php
         // display the create button only if the user has logged in
           // if(isset($_SESSION['role']))
          //  {
              // echo   '<button><a class="btn btn-sm" href="createSchool.php">Create a School</a></button>';
           // }
        //?>

        
    <button><a class="btn btn-sm" href="createSchool.php">Create a School</a></button>

        <table class="display" id="ceremoniesTable" style="width:100%">
            <div class="table responsive">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Type</th>
                        <th>State</th>
                        <th>Modify </th>
                        <th>Delete </th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php


                    if ($id->num_rows > 0) {
                        // output data of each row
                        while ($row = $id->fetch_assoc()) {
                            echo '<tr>                            
                                <td>
                                    <a href = "displaySchool.php?school_id=' . $row["school_id"] . '">
                                       <img class="thumbnailSize" src="' . 'Images/index_images/' . $row["image_name"] . '" alt="' . $row["image_name"] . '">
                                    </a>
                                </td>
                                <td>' . $row["school_id"] . '</td>
                                <td><a href="displaySchool.php?school_id=' . $row["school_id"] . '"> ' . $row["name"] . '  </a></td>
                                <td>' . $row["year_founded"] . '</td>
                                <td>' . $row["school_type"] . '</td>
                                <td>' . $row["state_name"] . ' </td>                              
                                <td><a class="btn btn-warning btn-sm" href="modifySchool.php?school_id=' . $row["school_id"] . '">Modify</a></td>
                                <td><a class="btn btn-danger btn-sm" href="deleteSchool.php?school_id=' . $row["school_id"] . '">Delete</a></td>
                            </tr>';
                        } //end while
                    } //end if
                    else {
                        echo "0 results";
                    } //end else
                    ?>
                </tbody>
            </div>
        </table>
    </div>
</div>

<!-- /.container -->
<!-- Footer -->
<footer class="page-footer text-center">
    <p>Project Access - Girl Scouts (River Valley) project by Deepta Jasthi</p>
</footer>

<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Data Table-->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {

        $('#ceremoniesTable').DataTable({
            dom: 'lBfrtip', 
            buttons: [
                'copy', 'excel', 'csv', 'pdf'
            ]
        });

        $('#ceremoniesTable thead tr').clone(true).appendTo('#ceremoniesTable thead');
        $('#ceremoniesTable thead tr:eq(1) th').each(function(i) {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');

            $('input', this).on('keyup change', function() {
                if (table.column(i).search() !== this.value) {
                    table
                        .column(i)
                        .search(this.value)
                        .draw();
                }
            });
        });

        var table = $('#ceremoniesTable').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            retrieve: true
        });

    });
</script>
</body>

</html>