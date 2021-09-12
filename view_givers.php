<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Manage Givers | Medaase </title>


    <?php include("./includes/header.php") ?>
    <?php include("./includes/dbconn.php") ?>



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
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->

    <!--  END NAVBAR  -->

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

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget widget-content-area br-4">
                            <div class="widget-one">

                                <h6>Manage Givers</h6>

                            </div>
                        </div>

                        <div class="widget-content widget-content-area br-6">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <?php

                                    $query = "SELECT * FROM givers";
                                    $query_run = mysqli_query($con, $query);

                                    ?>

                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Counrty</th>
                                        <th>Avatar</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <style>
                                    .table {
                                        width: 100%;
                                        margin-bottom: 1rem;
                                        color: #ffffff;
                                    }
                                </style>
                                <tbody>
                                    <?php
                                    if ($query_run) { {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <th><?php echo $row['id']; ?></th>
                                        <th><?php echo $row['name']; ?></th>
                                        <th><?php echo $row['email']; ?></th>
                                        <th><?php echo $row['phone']; ?></th>
                                        <th><?php echo $row['country']; ?></th>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark btn-sm">View</button>
                                                <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>

                                                    <!-- <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a> -->
                                                </div>
                                            </div>
                                        </td>


                                    </tr>

                        <?php

                                            }
                                        }
                                    } else {
                                        echo "No records Found";
                                    }
                        ?>
                        </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>

            </div>
            <?php include("./includes/footer.php") ?>

            <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
            <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>