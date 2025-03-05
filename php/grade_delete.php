<?php
include "connect.php";

session_start();

$out = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = mysqli_query($con, "DELETE FROM grade WHERE id='{$id}'");

    if ($delete) {
        $out = "
            <script>
                alert('Grade Deleted');
                window.location.assign('../pages/grade_view.php');
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Failed to remove grade');
                window.location.assign('../pages/grade_view.php');
            </script>
        ";
    }
} else {
    $out = "
        <script>
            window.location.assign('../pages/grade_view.php');
        </script>
    ";
}

echo $out;
