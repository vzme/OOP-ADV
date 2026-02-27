<?php require('init.php');
require_once('header.php')
?>


<?php if ($session->get_login_in()) { ?>
  <nav class="navbar  bg-primary rounded mt-4 col-lg-11 mx-auto">
    <div class="container">
      <a class="navbar-brand" href="?home">
        <img src="./assets/img/v.png" alt="Bootstrap" width="50" height="50">
        <?php
        if ($session->rule == 2) {
          echo
          '
    <a class="navbar-brand" href="index.php">
      <button class="btn btn-dark rounded">Welcome Admin</button>
    </a>
   ';
        } ?>
        <button class="btn btn-secondary rounded">Home</button>
      </a>

      <a href="?logout">
        <button class="btn btn-danger shadow rounded">Logout</button>
      </a>


    </div>
  </nav>
<?php } ?>

