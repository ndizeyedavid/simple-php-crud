<?php

include "connect.php";

$out = "";

if (isset($_POST['update'])) {
    $o_id = $_POST['o_id'];

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $examDate = $_POST['examDate'];

    $update = mysqli_query($con, "UPDATE candidate SET candidateNationalId='{$id}', firstName='{$fname}', lastName='{$lname}', DOB='{$dob}', ExamDate='{$examDate}' WHERE candidateNationalId='{$o_id}'");

    if ($update) {
        $out = "
            <script>
                alert('Candidate Update successfully');
                window.location.assign('../pages/candidate_view.php');
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Failed to update candidate');
                window.location.assign('../pages/candidate_update.php');
            </script>
        ";
    }
} else {
    $out = "
        <script>
            window.location.assign('../pages/candidate_view.php');
        </script>
    ";
}

echo $out;
