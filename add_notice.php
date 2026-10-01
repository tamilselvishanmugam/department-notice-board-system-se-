<?php
include "db.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $created_at = $_POST['created_at'];

    $sql = "INSERT INTO notice (title, content, created_at)
            VALUES ('$title', '$content', '$created_at')";

    mysqli_query($conn, $sql);

    echo "Notice Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Notice</title>
</head>
<body>

<h2>Add Notice</h2>

<form method="POST">

    <input type="text" name="title" placeholder="Notice Title" required><br><br>

    <textarea name="content" placeholder="Notice Content" required></textarea><br><br>

    <input type="created_at" name="created_at" required><br><br>

    <button type="submit" name="submit">Add Notice</button>

</form>

</body>
</html>