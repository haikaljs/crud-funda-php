<?php
session_start();
require 'dbcon.php';

?>

<?php include('includes/header.php'); ?>

<div class="container mt-5">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Students details
                        <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM students";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $student) {
                            ?>

                                    <tr>
                                        <td><?php echo $student['id']; ?></td>
                                        <td><?php echo $student['name']; ?></td>
                                        <td><?php echo $student['email']; ?></td>
                                        <td><?php echo $student['phone']; ?></td>
                                        <td><?php echo $student['course']; ?></td>
                                        <td>
                                            <a href="student-view.php?id=<?php echo $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="student-edit.php?id=<?php echo $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>

                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_student" value="<?php echo $student['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<h5>No record found</h5>";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>