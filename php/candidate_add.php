<?php

include "connect.php";

$out = "";
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $examDate = $_POST['examDate'];

    $insert = mysqli_query($con, "INSERT INTO candidate values('{$id}', '{$fname}', '{$lname}', '{$dob}', '{$examDate}')");

    if ($insert) {
        $out = "
            <script>
                alert('New candidate added successfully');
                window.location.assign('../pages/candidate_view.php');
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Failed to add a candidate');
                window.location.assign('../pages/candidate_add.php');
            </script>
        ";
    }
} else {
    $out = "
            <script>
                window.location.assign('../pages/candidate_add.php');
            </script>
        ";
}

echo $out;
