<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numStat = $_GET['numStat'];
$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];

?>

<!--Bootstrap form to create a new status-->
        <div class="col-md-10">
            <h1>Delete Keyword</h1>
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">libMotCle</label>
                    <input id="numMotCle" class="form-control" style="display: none" type="text" name="numMotCle" value="<?php echo($numMotCle) ?>" readonly="readonly">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                </div>
            </form>
        </div>
<?php include '../../../footer.php'; ?>