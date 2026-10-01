s<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM notice ORDER BY id DESC");
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Department Notice Board</title>
</head>

<body>

<h1>Department Notice Board</h1>

<h2>Dashboard</h2>

<a href="add_notice.php">
    <button>Add Notice</button>
</a>

<h2>Notices</h2>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['content']; ?></p>
    <p>Date: <?php echo $row['created_at']; ?></p>
    <hr>

<?php } ?>

</body>
</html>
