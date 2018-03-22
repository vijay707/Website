<?php  
session_start();
if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
?>

<html>
    <body>
        Notes will display here.
    </body>
</html>








<?php
}else{
    header("Location:login.php");
}
?>
