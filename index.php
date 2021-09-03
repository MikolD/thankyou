<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard | Medaase </title>
    

    <?php include("./includes/header.php") ?>
    


    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px)!important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
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

                                <h6>Thankyou is all it takes</h6>

                                <p class="mb-0 mt-3" style="color: #888ea8;">Rewards are given  to be motivated. Show apprecition in any way you can</p>

                            </div>
                        </div>
                    </div>
                    <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class=""></h3>
                                    <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                </div>
                                <div class="text-center user-info">
                                    <img src="assets/img/90x90.jpg" alt="avatar">
                                    <p class=""></p>
                                </div>
                                <div class="user-info-list">

                                    <div class="">
                                     
                                    </div>                                    
                                </div>
                            </div>
                        </div>


                </div>
            </div>
            <a href="user_profile.html">login</a>
            <a href="auth_login.php">login</a>
            <?php include("./includes/footer.php") ?>
</body>
</html>