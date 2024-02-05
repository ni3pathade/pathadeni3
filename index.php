<?php
include 'db.php';

if($_GET){
    if($_GET['put'] == 'insert'){
        echo "alert('data added)";
    }else if($_GET['put'] == 'notinsert'){
        echo "alert('data NOT added)";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div>
            <a href="addnewclass.php">
                <button>Add New Class</button>
            </a>
        </div>
        <div>
            <table style="width: 100%;">
                <thead>
                    <tr>
                    <td>sr no.</td>
                    <td>school Id</td>
                    <td>Student Id</td>
                    <td>Assignment</td>
                    <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM class";
                    $result = $conn->query($sql);
                    $sr_no = 1;

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?= $sr_no ?></td>
                                <td><?= $row['schoolid'] ?></td>
                                <td><?= $row['studentid'] ?></td>
                                <td><?= $row['assignment'] ?></td>
                                <td><?= $row['status'] ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>