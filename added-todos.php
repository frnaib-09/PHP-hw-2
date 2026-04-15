<?php
include 'layouts/header.php';
include_once './database/env.php';
$query = "SELECT * FROM `todos`";
$response = mysqli_query($connection, $query);

?>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-header bg-dark text-white">Title</div>
                    <div class="card-body bg-dark-subtle">Description</div>
                    <div class="card-footer bg-secondary-subtle">Deadline</div>
                </div>
            </div>
        </div>
    </div>
    
<?php
include 'layouts/footer.php';

?>
