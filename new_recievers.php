<?php 

include("./includes/dbconn.php")
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

                                <h6>Welldone</h6>

                                <p class="mb-0 mt-3" style="color: #888ea8;">Medaase Pii</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper col3" style="padding:18px">

    <div class="first" style="margin-left: 72px;" >
      <h2>Recievers Table</h2>
    </div>  

</div><br>

    <form method="POST" action="submit" onSubmit="return validateform()">
      <div class="wrapper col4">
  <div class="container" style="width:85%">
    <table  class="table table">
      <tbody>
        <tr>
          <td width="34%">ID</td>
          <td><input type="text" name="id" id="id"/></td>
        </tr>

        <tr>
          <td>Name</td>
          <td><input type="text" name="Name" id="Name" /></td>
        </tr>

        <tr>
          <td>Gender</td>
          <td><select name="select3" id="select3">
           <option value="">Select</option>
          <?php
      $arr = array("Male","Female");
      foreach($arr as $val)
      {
        if($val == $rsedit[$gender])
        {
        echo "<option value='$val' selected>$val</option>";
        }
        else
        {
          echo "<option value='$val'>$val</option>";        
        }
      }
      ?>
          </select></td>
        </tr>

         <tr>
          <td>Work-Id</td>
          <td><input type="text" name="workId" id="workId" /></td>
        </tr>

         <tr>
          <td>Work Place</td>
          <td><input type="placeofWork" name="placeofWork" id="placeofWork"/></td>
        </tr>

         <tr>
          <td>Email</td>
          <td><input type="text" name="Email" id="Email" /></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" id="phone" /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address" id="address" /></td>
        </tr>
        <tr>
          <td>Image</td>
          <td><input type="file" name="image" id="image" /></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><input type="text" name="Department" id="Department" /></td>
        </tr>
        <tr>
          <td>Branch</td>
          <td><input type="text" name="branch" id="branch" /></td>
        </tr>


        <tr>
          <td colspan="2" align="center"><input type="submit" name="givers" id="submit" value="Enter" /></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
    </form>
    <p>&nbsp;</p>
 <div class="clear"></div>

            </div>
            <?php include("./includes/footer.php") ?>
            
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>