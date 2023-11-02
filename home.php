<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

    <p>Welocom mr tahar</p> 


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>


