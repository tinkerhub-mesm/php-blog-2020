<?php 
session_start();
?>

<!DOCTYPE html>
<!-- ths is login of admin -->
<?php 
$isAuthScusses = true; 
if (isset($_POST['formbtn'])) {
 include './auth/auth.php';
 if (authUser('publisher',$_POST['username'], $_POST['password'])) {
    $_SESSION["authUsername"] = $_POST['username'];
    $_SESSION["authPassword"] = $_POST['password'];
    header("Location: ./dashboard");
 }else{
    $isAuthScusses = false;
 }

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinkerhub Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
<form action="" method="post">

<div class="container form_design">
    <h4>login</h4>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text"
            class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="username">Password</label>
          <input type="password"
            class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password">
        </div>
        <input name="formbtn" id="" class="btn btn-primary" type="submit" value="Login">
        <?php
        if (!$isAuthScusses) {
        ?>
        <div class="mt-3 bg-danger text-white p-3 notifications_custom">
        <?php 
            echo 'your password or username is wrong';
        ?>
        </div>
        <?php
        }
        ?>
    </div>

</form>
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>