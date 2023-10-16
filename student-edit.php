<?php
session_start();
require('dbcon.php');
?>

<?php include('includes/header.php'); ?>

    <div class="container mt-5 ">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $student_id; ?>">
                                    <div class="mb-3">
                                        <label for="">Student Name</label>
                                        <input type="text" name="name" value="<?php echo $student['name'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Student Email</label>
                                        <input type="email" name="email" value="<?php echo $student['email'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Student Phone</label>
                                        <input type="number" name="phone" value="<?php echo $student['phone']?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Student Course</label>
                                        <input type="text" name="course" value="<?php echo $student['course']?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>

                                    </div>

                                </form>

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



    <?php include('includes/footer.php'); ?>