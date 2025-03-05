<?php
include "../php/connect.php";

$fetch = mysqli_query($con, "SELECT * FROM candidate");
$num = mysqli_num_rows($fetch);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL - <?php echo $num; ?> Candidate(s)</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "../html/Sidebar.php"; ?>

    <main>
        <!-- heading -->
        <div class="top-cont">
            <h3>Candidates</h3>
            <a href="candidate_add.php"><button>New Candidate</button></a>
        </div>

        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>National Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>ExamDate</th>
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
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['DOB']; ?></td>
                            <td><?php echo $row['ExamDate']; ?></td>
                            <td><a class="update" href="candidate_update.php?id=<?php echo $row['candidateNationalId'] ?>">Update</a></td>
                            <td><a class="delete" href="../php/candidate_delete.php?id=<?php echo $row['candidateNationalId'] ?>">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='8' align='center'>No candidate added yet</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <script src="js/main.js"></script>
</body>

</html>