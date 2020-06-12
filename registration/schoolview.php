<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Junaid Ashraf">
    <meta name="author" content="Junaid Ashraf">
    <meta name="keywords" content="Registration Form">

    <!-- Title Page-->
    <title>TECHMEDHA '19</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">


    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

     <iframe id="parallax_star_bg" src="../parallax_star_bg/index.html" frameborder="0" style="overflow:auto;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px;" height="100%" width="100%"></iframe>

    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3" style="position: absolute;width: 60%;top:30px;opacity: 0.7">
                <div class="card-heading"></div>
                <div class="card-body">
               
                <?php
                
                $con=mysqli_connect("localhost","root","","techmedha_2k19");
                $sel="SELECT * FROM schoolform ORDER by id DESC limit 1";
                $rs=$con->query($sel);
                while($row=$rs->fetch_assoc())
                 {

                ?>
                 <table class="table" style="color:white">
                <thead>
                <tr>
                <th>Name: </th>
                <td><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td><?php echo $row['email'];?></td>
                 </tr>
                 <tr>
                <th>Phone: </th>
                <td><?php echo $row['phone'];?></td><br><br>
                </tr>
                <tr>
                <tr>
                <th>School: </th>
                <td><?php echo $row['school'];?></td>
                </tr>
                <tr>
                </thead>
                <tr>
       <?php
     }
      ?>
    </tbody>
  </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
