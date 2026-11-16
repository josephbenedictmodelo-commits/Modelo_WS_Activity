<?php
include ("db_connect.php");
//1. DEFINE THE SQL QUERY
$sql = "SELECT * FROM burger";
//2. EXECUTE THE QUERY
$result = mysqli_query($conn, $sql);
//3. Check if ANY ROWS WERE RETURNED
if(mysqli_num_rows($result)>0){
//4. FETCH THE RECORD AS AN ARRAY
while ($row = mysqli_fetch_assoc($result)){
echo $row["id"] . "<b>";
echo $row["name"] . "<br>";
echo $row["price"] .  "<br>";
}
}
else{
    echo "No burger";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Output</title>
</head>
<body>
    <h2>Simple Output</h2>

    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Name: ' . $row['name'] . '<br>';
        echo 'Price: $' . $row['price'];
    } else {
        echo 'No data found.';
    }
    ?>
</body>
</html>