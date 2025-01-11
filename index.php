<?php
session_start();
include './include/header.php' ?>

<main>
    <div class="container">
        <div class="row">
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['errors']['title_error'] ?? null ?>
            </div>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['errors']['details_error'] ?? null ?>
            </div>
            <div class="card mt-1">
                <div class="card-header">Add Post</div>
                <div class="card-body">
                    <form action="./controller/postControl.php" method="post">
                        <input type="text" name="title" placeholder="Enter Title" class="form-control mt-3">
                        <textarea name="details" placeholder="Details" class="form-control my-3"></textarea>
                        <input type="text" name="author" placeholder="Author" class="form-control">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include './include/footer.php';
session_unset();
?>