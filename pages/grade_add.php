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
    <title>RDL - Add - Grade</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "../html/Sidebar.php"; ?>

    <main style="display: flex; align-items: center; justify-content: center;">
        <fieldset>
            <legend>New Grade</legend>

            <form action="../php/grade_add.php" method="post">

                <div>
                    <label>Candidate</label>
                    <select name="id">
                        <?php
                        if ($num > 0) {
                            while ($row = mysqli_fetch_assoc($fetch)) {
                                $fullName = $row['firstName'] . " " . $row['lastName'];
                                $id = $row['candidateNationalId'];
                                echo "<option value='$id'>$fullName</option>";
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
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>

                <div>
                    <label>Obtained Marks(Max: 20)</label>
                    <input type="number" name="marks" min="0" max="20" required>
                </div>

                <input id="submit" type="submit" value="Add" name="add">
            </form>
        </fieldset>
    </main>

    <script src="js/main.js"></script>
</body>

</html>