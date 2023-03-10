<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$keywords = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
        <div class="col-md-10">
            <h1>Keywords</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($keywords as $keyword) { ?>
                        <tr>
                            <td><?php echo $keyword['numMotCle']; ?></td>
                            <td><?php echo $keyword['libMotCle']; ?></td>
                            <td>
                                <a href="update.php?numStat=<?php echo $keyword['numMotCle']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo $keyword['numMotCle']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
<?php
include '../../../footer.php'; // contains the footer