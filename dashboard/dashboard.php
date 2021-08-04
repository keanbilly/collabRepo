<?php
session_start();
if(empty($_SESSION['username'])){
    header('Location: ../index.php');
}
require '../header.php';
?>

<div class="container">
<div class="row">
<div class="col-md-6">
Hello! <?php echo $_SESSION['username']?>
</div>

<div class="col-md-4 offset-md-2"><a href="logout.php">Log Out</a></div>


</div>
</div>