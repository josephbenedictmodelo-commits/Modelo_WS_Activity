<?php
include 'db_connect.php';

$sql = "SELECT * FROM burger ORDER BY id";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Burger List</title>
</head>
<body>
    <h2>Burger List</h2>

    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['id'] . ' - ' . $row['name'] . ' - $' . $row['price'] . '<br>';
        }
    } else {
        echo 'No burgers found.';
    }
    ?>
</body>
</html>