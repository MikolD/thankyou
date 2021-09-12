
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))
  {
  $sql ="INSERT INTO receivers(id,name,gender,workID,placeofWork,email,phone,image,department,branch)
   values('$_POST[id]','$_POST[name]','$_POST[gender]','$_POST[workID]','$_POST[placeofWork]','$_POST[email]','$_POST[phone]','$_POST[image]',$_POST[department]')";

  if($qsql = mysqli_query($con,$sql))
  {
    echo "<script>alert('reciever record inserted successfully...');</script>";
    echo "<script>window.location='view_recievers.php';</script>";  
    $insid= mysqli_insert_id($con);
    
  }
  else
  {
    echo mysqli_error($con);
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
                                    <form method="POST" action="submit">
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Full Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        </div>
                                        <div class="form-group mb-4">
              
                                            <label for="formGroupExampleInput">Gender</label>
                                            <select class="form-control  basic">
                                            <option selected="selected">Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                        </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">WorkID</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Place of Work</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Nationality</label>
                                            <select class="form-control  basic">
                                            <option selected="selected">Ghana</option>
                                            <option>Other African Country</option>
                                            <option>International</option>
                                          </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput2">Image Upload (Optional)</label>
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>                                       
                                  </div>
                                  <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Place of Work</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Place of Work</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        </div>
                                        <input type="submit" name="time" class="btn btn-primary">
                                    </form>


</div>


            </div>
            <?php include("./includes/footer.php") ?>
            
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>