<?php require('./includes/nav.php'); n(2); ?>
<div class="row mt-2 col-lg-10 p-4 d-flex justify-content-start">

    <!-- Sidebar -->
    <div class="col-lg-3 col-sm-12 m-1 bg-gradient-pink p-4 radius-20">

        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action">Add Post</a>
            <a href="#" class="list-group-item list-group-item-action">View Post</a>

            <?php if(isset($session->rule) && $session->rule == 2){ ?>
                <a href="adduser.php" class="list-group-item list-group-item-action">Add User</a>
                <a href="viewuser.php" class="list-group-item list-group-item-action">View User</a>
            <?php } ?>
        </div>

    </div>

    <!-- Content Area -->
    <div class="col-lg-8 col-sm-12 bg-success m-1 rounded p-3">
      <?php

      
        $user->id = 3;
        $query = $user->delete();
        if($query){
            echo "success";
        }else{
            echo "failed";
        }
    
    ?>
    </div>

</div>


  
<?php require('./includes/footer.php'); ?>