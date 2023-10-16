<?php 
session_start();
require 'dbcon.php';

// Update function
if(isset($_POST['update_student'])){

    $student_id = mysqli_real_escape_string($con, $_POST['id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE students SET  name='$name', email='$email', phone='$phone', course='$course'
               WHERE id='$student_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] =  'Student Data Updated Successfully';
        header('Location: index.php');
        exit(0);
    }else{
        $_SESSION['message'] =  'Student Data Not Updated';
        header('Location: index.php');
        exit(0);
    }
}


// Insert function
if(isset($_POST['save_student'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

 

    $query = "INSERT INTO students (name, email, phone, course) VALUES 
              ('$name', '$email', '$phone', '$course')";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] =  'Student Data Inserted Successfully';
        header('Location: index.php');
        exit(0);
    }else{
        $_SESSION['message'] =  'Student Data Not Inserted';
        header('Location: index.php');
        exit(0);
    }
}


?>