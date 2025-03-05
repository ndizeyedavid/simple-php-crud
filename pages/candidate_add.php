<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL - Add - Candidates</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <?php include "../html/Sidebar.php"; ?>

    <main style="display: flex; align-items: center; justify-content: center;">
        <fieldset>
            <legend>New Candidate</legend>

            <form action="../php/candidate_add.php" method="post">

                <div>
                    <label>Candidate National Id</label>
                    <input type="text" name="id">
                </div>

                <div>
                    <label>First Name</label>
                    <input type="text" name="fname">
                </div>

                <div>
                    <label>Last Name</label>
                    <input type="text" name="lname">
                </div>

                <div>
                    <label>DOB</label>
                    <input type="date" name="dob">
                </div>

                <div>
                    <label>Exam Date</label>
                    <input type="date" name="examDate">
                </div>

                <input id="submit" type="submit" value="Add" name="add">
            </form>
        </fieldset>
    </main>

    <script src="js/main.js"></script>
</body>

</html>