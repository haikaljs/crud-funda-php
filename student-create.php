<?php
session_start();
?>

<?php include('includes/header.php'); ?>

    <div class="container mt-5 ">
       
        <div class="row justify-content-center">
            
            <div class="col-md-8">
              <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="index.php" class="btn btn-dark float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Phone</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include('includes/footer.php'); ?>