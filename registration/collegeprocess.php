<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['birthday'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $college = $_POST['college'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $con=mysqli_connect("localhost","root","","techmedha_2k19");
    $ins = "INSERT INTO collegeform SET name='$name', email='$email', dob='$dob', phone='$phone', gender='$gender', college='$college', course='$course', year='$year'  ";
    $con->query($ins);
    header("location:schoolview.php");
}

?>