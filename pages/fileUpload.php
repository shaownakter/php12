<?php
    session_start();
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?pages=login');
    }
?>

<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Input Student Information carefully</h3>
                    </div>
                    <div class="card-body">
                        <h2>
                            <?php
//                                session_start();
//                                echo $_SESSION['id'];
                            ?>
                        </h2>
<!--                        <h6 class="text-success text-center">--><?php //echo isset($message) ? $message : '' ; ?><!--</h6>-->
                        <?php if (isset($message)) { ?>
                            <h6 class="text-success text-center"><?php echo $message; ?></h6>
                        <?php } ?>
                        <div>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Save Student Info" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>
