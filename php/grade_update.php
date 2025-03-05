<?php

include "connect.php";

$out = "";

if (isset($_POST['update'])) {
    $o_id = $_POST['o_id'];

    $candidate = $_POST['id'];
    $category = $_POST['category'];
    $marks = $_POST['marks'];
    $decision = $marks >= 15 ? "pass" : "fail";

    $update = mysqli_query($con, "UPDATE grade SET candidateNationalId='{$candidate}', LicenseExamCategory='{$category}', obtainedMarks='{$marks}', decision='{$decision}' WHERE id='{$o_id}' ");

    if ($update) {
        $out = "
            <script>
                alert('Grade Updated');
                window.location.assign('../pages/grade_view.php');
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Failed to update grade');
                window.location.assign('../pages/grade_add.php');
            </script>
        ";
    }
} else {
    $out = "
        <script>
            window.location.assign('../pages/grade_add.php');
        </script>
    ";
}

echo $out;
