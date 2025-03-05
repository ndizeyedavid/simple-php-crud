<?php
include "connect.php";

session_start();

$out = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = mysqli_query($con, "DELETE FROM candidate WHERE candidateNationalId='{$id}'");

    if ($delete) {
        $out = "
            <script>
                alert('Candidate Removed');
                window.location.assign('../pages/candidate_view.php')
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Failed to delete candidate');
                window.location.assign('../pages/candidate_view.php')
            </script>
        ";
    }
} else {
    $out = "
        <script>
            window.location.assign('../pages/candidate_view.php')
        </script>
    ";
}

echo $out;
