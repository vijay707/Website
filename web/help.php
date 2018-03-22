<?php
    include './connection.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "INSERT INTO `help` (`id`, `name`, `email`, `message`) VALUES ('','" .$name."','" . $email . "','" . $message. "');";
        if ($conn->query($sql)) {
            echo 'Query submitted successfully';
            header("Location:index.php");
        } else {
            echo 'error ';
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
        .student_details_table .btn{
            border-radius: 0px !important;
        }
        .student_details_table input{
            width: 100%;
        }
    </style>
    <div class="body">
        <form action="help.php" method="post">
            <table class='student_details_table' style="width: 50%">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email"/></td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td><textarea name="message" id="message" style="height: 220px;width: 100%"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-primary" value="Submit Query" />
                    </td>
                </tr>
            </table>
            </form>
    </div>