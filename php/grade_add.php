<?php

include "connect.php";

$out = "";

if (isset($_POST['add'])) {
    $candidate = $_POST['id'];
    $category = $_POST['category'];
    $marks = $_POST['marks'];
    $decision = $marks >= 15 ? "pass" : "fail";

    $insert = mysqli_query($con, "INSERT INTO grade VALUES('{$candidate}', '{$category}', '{$marks}', '{$decision}', '')");
    if ($insert) {
        $out = "
            <script>
                alert('New grade recoreded');
                window.location.assign('../pages/grade_view.php');
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Failed to add grade');
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
