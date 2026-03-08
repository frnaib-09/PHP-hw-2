<?php
    include 'layouts/header.php';
?>

    <div class="col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header">Add New ToDo</div>
            <div class="card-body">
                <form action="./controller/store-data.php" method="POST">
                    <div class="mb-3">
                        <label for="todoInput" class="form-label">ToDo Title</label>
                        <input type="text" name="title" id="todoInput" class="form-control" placeholder="Enter Your ToDo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">ToDo Description</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Enter Your ToDo description">
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" id="deadline" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php
include 'layouts/footer.php';
?>