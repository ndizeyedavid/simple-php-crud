<?php

include "../php/connect.php";

if (!isset($_GET['id'])) {
    header("candidate_view.php");
}

$id = $_GET['id'];

$fetch = mysqli_query($con, "SELECT * FROM candidate WHERE candidateNationalId='{$id}'");

$data = mysqli_fetch_assoc($fetch);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL - Update - Candidates (<?php echo $data['firstName'] ?>)</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "../html/Sidebar.php"; ?>

    <main style="display: flex; align-items: center; justify-content: center;">
        <fieldset>
            <legend>Update Candidate</legend>

            <form action="../php/candidate_update.php" method="post">
                <input type="hidden" name="o_id" value="<?php echo $data['candidateNationalId'] ?>">

                <div>
                    <label>Candidate National Id</label>
                    <input type="text" name="id" value="<?php echo $data['candidateNationalId'] ?>">
                </div>

                <div>
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo $data['firstName'] ?>">
                </div>

                <div>
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo $data['lastName'] ?>">
                </div>

                <div>
                    <label>DOB</label>
                    <input type="date" name="dob" value="<?php echo $data['DOB'] ?>">
                </div>

                <div>
                    <label>Exam Date</label>
                    <input type="text" name="examDate" value="<?php echo $data['ExamDate'] ?>">
                </div>

                <input id="submit" type="submit" value="Update" name="update">
            </form>
        </fieldset>
    </main>

    <script src="js/main.js"></script>
</body>

</html>