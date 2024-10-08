<?php

include 'dbcon.php';
include 'crud.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test php</title>
</head>
<body>

<?php

echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>first_name</th>";
echo "<th>last_name</th>";
echo "<th>age</th>";
echo "</tr>";

    echo "<tr>";
    echo "<td>" . ['id'] . "</td>";
    echo "<td>" . ['first_name'] . "</td>";
    echo "<td>" . ['last_name'] . "</td>";
    echo "<td>" . ['Age'] . "</td>";
    echo "</tr>";

echo "</table>";

?>


</body>
</html>