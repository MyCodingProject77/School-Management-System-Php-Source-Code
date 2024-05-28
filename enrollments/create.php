<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $enrolldate = date('Ymd', strtotime($_POST['enrolldate']));

    $sql = "INSERT INTO enrollment (name, course, enrolldate) VALUES ('$name', '$course', '$enrolldate')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

