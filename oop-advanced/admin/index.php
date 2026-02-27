<?php require('./includes/nav.php');
n(1); ?>




<div class="row mt-2 col-lg-10 p-4 d-flex justify-content-start">
    <div class="col-lg-3 col-sm m-1 bg-gradient-pink p-4 radius-20">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action">Add Post</a>
            <a href="#" class="list-group-item list-group-item-action">View Post</a>
            <?php if($session->rule == 2){ ?>
            <a href="adduser.php" class="list-group-item list-group-item-action">Add User</a>
            <a href="viewuser.php" class="list-group-item list-group-item-action">View User</a>
            <?php } ?>
        </div>
    </div>

 

<?php require('./includes/footer.php'); ?>