<?php 
require_once('./includes/nav.php');
$error = ['result'=>''];
require_once('./includes/login.php');
n(0);

?>

<div class="container d-flex justify-content-center align-items-center col-8 ">

<div class="form-group mt-5 bg-dark p-4 rounded">
    <img src="assets/img/logo.png" class="mx-auto d-block"  width="50%">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div>
    <label  class="form-label text-white">Username</label>
    <input type="text" class="form-control" value="<?php echo htmlspecialchars(isset($_POST['username'])) ? $_POST['username'] :  '' ?>" name="username" placeholder="Enter your username">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Password</label>
    <input type="password" class="form-control" value="<?php echo htmlspecialchars(isset($_POST['password'])) ? $_POST['password'] :  '' ?>" name="password" placeholder="Enter your password">
  </div>
      <p class="text-danger"><?php echo $error['result']; ?></p>
  <button type="submit" name="login" class="btn btn-primary col-12">Login</button>
</form>
</div>
</div>

<?php require('./includes/footer.php');?>





