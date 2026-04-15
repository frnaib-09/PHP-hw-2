<?php
include 'layouts/header.php';
include_once './database/env.php';
$query = "SELECT * FROM `todos`";
$response = mysqli_query($connection, $query);
$todos = mysqli_fetch_all($response, 1);
?>

    <div class="container my-5">
        <div class="row">
        <?php
            foreach($todos as $todo) {
            ?>
                <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header bg-dark text-white"><?= $todo['title']; ?></div>
                    <div class="card-body bg-dark-subtle"><?= $todo['description']; ?></div>
                    <div class="card-footer bg-secondary-subtle"><?php echo $todo['deadline']; ?></div>
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
