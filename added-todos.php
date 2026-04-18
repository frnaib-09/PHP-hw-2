<?php
include 'layouts/header.php';
include_once './database/env.php';
$query = "SELECT * FROM `todos` ORDER BY status ASC, deadline ASC";
$response = mysqli_query($connection, $query);
$todos = mysqli_fetch_all($response, 1);
$today = strtotime(Date('m/d/y'));
function getStatus($todo, $today) {
    return $todo['status'] ? [
        "status" => "Completed",
        "color" => "success"
    ] : ($today >= strtotime($todo['deadline']) ? [
        "status" => "Due",
        "color" => "danger"
    ] : [
        "status" => "Pending",
        "color" => "warning",
    ]);
}
?>

    <div class="container my-5">
        <div class="row">
        <?php
            foreach($todos as $todo) {
            ?>
                <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header bg-dark text-white"><?= $todo['title']; ?> <span class="badge bg-<?= getStatus($todo,$today)['color'] ?> float-end py-2"><?= getStatus($todo, $today)['status'] ?></span></div>
                    <div class="card-body bg-dark-subtle"><?= $todo['description']; ?></div>
                    <div class="card-footer bg-secondary-subtle"><?= $todo['deadline'] ?>
                        <div class="btn-group d-flex justify-content-between gap-2 bg-secondary-subtle mt-2" role="group" aria-label="Basic example">
                            <a href="./controller/mark-completed.php" class="btn <?= $todo['status'] ? 'disabled' : '' ?> btn-success">Mark as completed</a>
                            <a href="#" class="btn <?= $todo['status'] ? 'disabled' : '' ?>  btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>  
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    
<?php
include 'layouts/footer.php';
?>
