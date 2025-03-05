<?php


session_start();

if (!$_SESSION['email']) {
    header("location: http://localhost/l4_assessment/login.php");
}
?>

<aside>
    <div class="group">
        <div class="p-cont">
            <div class="profile"></div>
            <h3><?php echo $_SESSION['name']; ?></h3>
        </div>
        <!-- <h3>Rwanda Driving License</h3> -->

        <div>
            <span>Navigation</span>
            <a href="http://localhost/l4_assessment">Dashboard</a>
            <a href="http://localhost/l4_assessment/pages/candidate_view.php">Candidate</a>
            <a href="http://localhost/l4_assessment/pages/grade_view.php">Grade</a>
        </div>
    </div>

    <a class="logout" href="http://localhost/l4_assessment/php/logout.php">Logout</a>
</aside>