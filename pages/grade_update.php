<?php

include "../php/connect.php";

if (!isset($_GET['id'])) {
    header("grade_view.php");
}

$id = $_GET['id'];

$candidates = mysqli_query($con, "SELECT * FROM candidate");
$fetch = mysqli_query($con, "SELECT * FROM grade WHERE id='{$id}'");

$data = mysqli_fetch_assoc($fetch);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL - Update - Grade</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "../html/Sidebar.php"; ?>

    <main style="display: flex; align-items: center; justify-content: center;">
        <fieldset>
            <legend>Update Grade</legend>

            <form action="../php/grade_update.php" method="post">
                <input type="hidden" name="o_id" value="<?php echo $id; ?>">

                <div>
                    <label>Candidate</label>
                    <select name="id">
                        <?php
                        if (mysqli_num_rows($candidates) > 0) {
                            while ($row = mysqli_fetch_assoc($candidates)) {
                                $fullName = $row['firstName'] . " " . $row['lastName'];
                                $id = $row['candidateNationalId'];
                                $selected = $row['candidateNationalId'] == $data['candidateNationalId'] ? "selected" : null;
                                echo "<option value='$id' $selected>$fullName</option>";
                            }
                        } else {
                            echo "<option value='' disabled>No candidate Present</option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label>License Category</label>
                    <select name="category">
                        <option value="A" <?php echo $data['LicenseExamCategory'] == "A" ? "selected" : null; ?>>A</option>
                        <option value="B" <?php echo $data['LicenseExamCategory'] == "B" ? "selected" : null; ?>>B</option>
                        <option value="C" <?php echo $data['LicenseExamCategory'] == "C" ? "selected" : null; ?>>C</option>
                        <option value="D" <?php echo $data['LicenseExamCategory'] == "D" ? "selected" : null; ?>>D</option>
                    </select>
                </div>

                <div>
                    <label>Obtained Marks</label>
                    <input type="number" name="marks" value="<?php echo $data['obtainedMarks'] ?>">
                </div>

                <input id="submit" type="submit" value="Update" name="update">
            </form>
        </fieldset>
    </main>

    <script src="js/main.js"></script>
</body>

</html>