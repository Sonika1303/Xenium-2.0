<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['birthday'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    $con=mysqli_connect("localhost","root","","techmedha_2k19");
    $ins = "INSERT INTO schoolform SET name='$name', email='$email', dob='$dob', phone='$phone', gender='$gender', school='$school', class='$class'";
    $con->query($ins);
    header("location:schoolview.php");
}

?>