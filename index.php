<?php
    include 'layouts/header.php';
?>

    <div class="col-lg-5 mx-auto mt-5">
        <div class="card">
            <div class="card-header">Add New ToDo</div>
            <div class="card-body">
                <form action="./controller/store-data.php" method="POST">
                    <div class="mb-3">
                        <label for="todoInput" class="form-label">ToDo Title</label>
                        <input value="<?= $_SESSION['old_data'] ['title'] ?? ''?>" type="text" name="title" id="todoInput" class="form-control" placeholder="Enter Your ToDo">
                        <span class="text-danger"><?= $_SESSION['input_errors']['title_error'] ?? '' ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">ToDo Description</label>
                        <input value="<?= $_SESSION['old_data'] ['description'] ?? '' ?>" type="text" name="description" id="description" class="form-control" placeholder="Enter Your ToDo description">
                        <span class="text-danger" ><?= $_SESSION['input_errors']['description_error'] ?? '' ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input value="<?= $_SESSION['old_data'] ['deadline'] ?? '' ?>" type="date" name="deadline" id="deadline" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php
include 'layouts/footer.php';
?>