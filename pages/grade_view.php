<?php
include "../php/connect.php";

$fetch = mysqli_query($con, "SELECT grade.id, candidate.candidateNationalId, firstName, lastName, LicenseExamCategory, obtainedMarks, decision FROM grade INNER JOIN candidate ON candidate.candidateNationalId=grade.candidateNationalId");
$num = mysqli_num_rows($fetch);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL - Grades</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "../html/Sidebar.php"; ?>

    <main>
        <!-- heading -->
        <div class="top-cont">
            <h3>Grade</h3>
            <a href="grade_add.php"><button>New Grade</button></a>
        </div>

        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Candidate National Id</th>
                    <th>Name</th>
                    <th>License Exam Category</th>
                    <th>Marks</th>
                    <th>Decision</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if ($num > 0) {
                    $count = 0;
                    while ($row = mysqli_fetch_assoc($fetch)) {
                ?>
                        <tr>
                            <td><?php echo ++$count; ?></td>
                            <td><?php echo $row['candidateNationalId'] ?></td>
                            <td><?php echo $row['firstName'] . " " . $row['lastName']; ?></td>
                            <td><?php echo $row['LicenseExamCategory'] ?></td>
                            <td><?php echo $row['obtainedMarks'] ?></td>
                            <td><?php echo $row['decision'] ?></td>
                            <td><a class="update" href="grade_update.php?id=<?php echo $row['id'] ?>">Update</a></td>
                            <td><a class="delete" href="../php/grade_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='8' align='center'>No grades recorded yet</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <script src="js/main.js"></script>
</body>

</html>