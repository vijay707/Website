<?php include './includes.php';?>
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="wthree_agile_login">
            <ul>
                <?php
                if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                    ?>
                    <li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="home.php"><?php echo $_SESSION['name']; ?></a></li>
                    </li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php
                } else {
                    ?>
                    <!--<li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li> -->                       
                <?php } ?>
            </ul>
        </div>

    </div>
</div>