<?php
session_start();



include("./includes/dbconn.php");


if (isset($_POST["addgiver"])) {
    $addgiverquery = "INSERT INTO receivers(email,name,gender,phone,department,workID,placeofWork,branch) values('$_POST[email]','$_POST[fullName]','$_POST[gender]','$_POST[phoneNumber]','$_POST[department]','$_POST[workid]','$_POST[placeofwork]','$_POST[branch]')";
    $error = mysqli_query($con, $addgiverquery);
    if ($error) {
        echo "<script>alert('reciever record inserted successfully...');</script>";
        echo "\n<script>window.location.redirect(\"/index.php\");</script>";
    } else {
        echo "<script>alert(\"" .   $error  . "\")</script>";
         echo "<script>alert(\"" .   mysqli_error($con)  . "\")</script>";
        // echo mysqli_error($con);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>New Reciever | Medaase </title>


    <?php include("./includes/header.php") ?>



    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php include("./includes/navbar.php") ?>


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <!-- SIDENAV BEGINS HERE -->
        <?php include("./includes/sidenav.php") ?>
        <!-- SIDENAV ENDS HERE -->
      
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="first">
                    <h2>New Receiver</h2>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="POST" action="new_recievers.php">
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Full Name</label>
                            <input name="fullName" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Full Name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Email Address</label>
                            <input name="email" required type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Email Address">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Phone Number</label>
                            <input name="phoneNumber" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Phone Number">
                        </div>
                      
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Work ID</label>
                            <input required name="workid" type="text" class="form-control" id="formGroupExampleInput" placeholder="Work ID">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Place of Work</label>
                            <input required name="placeofwork" type="text" class="form-control" id="formGroupExampleInput" placeholder="Place of Work">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Branch</label>
                            <input required name="branch" type="text" class="form-control" id="formGroupExampleInput" placeholder="Branch">
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Gender</label>
                            <select name="gender" class="form-control" id="formGroupExample  basic">
                                <option selected="selected">Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Department</label>
                            <select name="department" class="form-control" id="formGroupExample  basic">
                                <option selected="selected">Computer Science</option>
                                <option>Business</option>
                                <option>Nursing</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput2">Image Upload (Optional)</label>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                        <input name="addgiver" type="submit" name="time" class="btn btn-primary">
                    </form>


                </div>

            </div>
            <?php include("./includes/footer.php") ?>

            <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
            <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>