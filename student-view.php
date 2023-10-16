<?php
session_start();
require('dbcon.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 ">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>View Student
                            <a href="index.php" class="btn btn-dark float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_assoc($query_run);
                        ?>
                                
                                   
                                    <div class="mb-3">
                                        <label for="">Student Name</label>
                                        <p class="form-control">
                                        <?php echo $student['name']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Student Email</label>
                                        <p class="form-control">
                                        <?php echo $student['email']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Student Phone</label>
                                        <p class="form-control">
                                        <?php echo $student['phone']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Student Course</label>
                                        <p class="form-control">
                                        <?php echo $student['course']; ?>
                                        </p>
                                    </div>
                                   

                               

                        <?php
                            } else {
                                echo 'No such id found';
                            }
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>