<?php
include "php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php include "html/Sidebar.php"; ?>

    <main>
        <div class="title">
            <h3>Dashboard</h3>
        </div>

        <div class="analytics-container">
            <div>
                <h3>Candidates</h3>

                <span>
                    <?php
                    $candidates = mysqli_query($con, "SELECT * FROM candidate");
                    echo mysqli_num_rows($candidates);
                    ?>
                </span>
            </div>

            <div>
                <h3>Passed</h3>
                <span>
                    <?php
                    $passed = mysqli_query($con, "SELECT * FROM grade WHERE decision='pass'");

                    echo mysqli_num_rows($passed);
                    ?>
                </span>
            </div>

            <div>
                <h3>Failed</h3>
                <span>
                    <?php
                    $failed = mysqli_query($con, "SELECT * FROM grade WHERE decision='fail'");

                    echo mysqli_num_rows($failed);
                    ?>
                </span>
            </div>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>

</html>