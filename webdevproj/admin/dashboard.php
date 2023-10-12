<?php
include '../config/dbCon.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
}


if (isset($_GET['log'])) {
    if ($_GET['log'] == 'true') {
        session_destroy();
        header("Location: ../index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container">
        <h1>Dashboard</h1>
        <a href="dashboard.php?log=true">Logout</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email at</th>
                    <th scope="col">Password</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Country</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM users";
                $select = mysqli_query($conn, $sql);


                if (mysqli_num_rows($select) != 0) {

                    while ($row = mysqli_fetch_array($select)) {

                        ?>

                        <tr>
                            <th scope="row">
                                <?php echo $row['id']; ?>
                            </th>
                            <td>
                                <?php echo $row['uname']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <th scope="row">
                                <?php echo $row['pass']; ?>
                            </th>
                            <td>
                                <?php echo $row['fname']; ?>
                            </td>
                            <td>
                                <?php echo $row['lname']; ?>
                            </td>
                            <th scope="row">
                                <?php echo $row['gender']; ?>
                            </th>
                            <td>
                                <?php echo $row['dob']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>
                            
                        </tr>


                        <?php

                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>