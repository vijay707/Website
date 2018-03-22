<?php
include './connection.php';
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rno = $_POST['rno'];
        $sql = "update student set name='".$name."', email='".$email."', rollno='".$rno."' where id = ".$_SESSION['id'].";";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['name'] = $name;
            header("Location:home.php");
            exit();
        }
    }
    $sql = "select * from student where id=" . $_SESSION['id'] . ";";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
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
        <form action="edit.php" method="post">
            <table class='student_details_table' style="width: 30%">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>"/></td>
                </tr>
                <tr>
                    <td>RollNo</td>
                    <td><input type="text" name="rno" id="rno" value="<?php echo $row["rollno"]; ?>"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row["email"]; ?>"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-primary" value="Update" />
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
