<?php
    extract($_POST);
    include('db.php');

    $sql = "INSERT INTO class (schoolid, studentid, assignment, status) VALUES ('$school_id', '$student_id', '$assignment', '$status')";
    if($conn->query($sql) == true){
        echo "<script> window.location.href = 'http://localhost/test?put=insert' </script>";
        exit;
    }else{
        echo "<script> window.location.href = 'http://localhost/test?put=notinsert' </script>";
        exit;
    }

?>