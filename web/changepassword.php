<?php
include './connection.php';
session_start();
$responseMsg = "";
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cpassword = $_POST['cpassword'];
        $sql = "select * from student where id=".$_SESSION['id']." and password = '".$cpassword."';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $npassword = $_POST['newpassword'];
            $rnpassword = $_POST['rnewpassword'];
            if($npassword == $rnpassword){
                $sql = "update student set password='".$npassword."' where id = ".$_SESSION['id'].";";
                if ($conn->query($sql) === TRUE) {
                    header("Location:home.php?msg=Password updated successfully");
                    exit();                    
                }
            }else{
                $responseMsg = '<div class="error">Password mismatch</div>';
            }
        }else{
           $responseMsg = '<div class="error">Incorrect password</div>';
        }
    }    
?>
    <style>
        .student_details_table td{
            padding: 5px 10px;
            /*border: 1px solid #ddd;*/
        }

        .student_details_table{
            border-collapse: collapse;
            margin-top: 50px;
        }
        .body{
            min-height: 530px;
        }
        .student_details_table .btn{
            border-radius: 0px !important;
        }
    </style>
    <?php include './header.php'; ?>
    <div class="body">        
        <form action="changepassword.php" method="post">
            <?php echo $responseMsg;?>
            <table class='student_details_table' style="width: 30%">
                <tr>
                    <td>Current Password</td>
                    <td><input type="password" name="cpassword" id="cpassword"/></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="newpassword" id="newpassword"/></td>
                </tr>
                <tr>
                    <td>Retype New Password</td>
                    <td><input type="password" name="rnewpassword" id="rnewpassword"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-primary" value="Update Password" />
                    </td>
                </tr>
            </table>
            </form>
    </div>
    <?php include './footer.php'; ?>
    <?php
} else {
    header("Location:login.php");
}
?>
