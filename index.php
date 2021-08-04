<?php
include './utils/connection.php';
require_once './templates/header.php';
require_once './method/get-all.php';
?>
<div style=" max-width: 920px;" class="container my-4">
    <form action="create.php" method="POST" class="form-control">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
            <input type="text" required name="name" class="form-control" id="exampleFormControlInput1" placeholder="ex: John Dowel">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" plac class="form-label">Your Comment</label>
            <textarea required name="comment" placeholder="Really good content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input class="btn btn-lg btn-success" type="submit" value="Submit Comment" />
    </form>
    <div class="content row row-cols-2">
        <?php $comments =  getComment($connection);
        while ($comment = mysqli_fetch_array($comments)) {
        ?>
            <div class="col card my-2 mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <h6 class="card-title"><?= $comment['name'] ?></h6>
                    <p class="card-text"><?= $comment['comment'] ?></p>
                   <small><?= $comment['date'] ?></small>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
require_once './templates/footer.php'
?>