<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
?>

<!--Bootstrap form to create a new status-->
        <div class="col-md-12">
            <h1>Create new Status</h1>
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">libStat</label>
                    <input id="libStat" class="form-control" type="text" name="libStat">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
<?php include '../../../footer.php'; ?>