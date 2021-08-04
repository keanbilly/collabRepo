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

<div class="row mt-5">

<div class="col-md-6"><input type="text" id="find-friends"> <button type="btn btn-primary" id="btn-find-friends">Search</button></div>


<table class="tbl tbl-stripped mt-5">
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>

<tr>
<td>2</td>
<td>2</td>
<td>2</td>  
</tr>


</table>
</div>



</div>

<script>
$(document).ready(function(){
    console.log($.fn.tooltip.Constructor.VERSION);
    $('#btn-find-friends').click(function(){
        console.log('clicked');
    });

});
</script>