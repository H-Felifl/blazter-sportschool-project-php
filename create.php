<?php
include 'crud.php';
global $db;
$query = $db->prepare('SELECT * FROM students');
$query->execute();
$students = $query->fetchAll(PDO::FETCH_ASSOC);
if (isset($_POST['submit'])) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['Age'])) {
        $fname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
        $age = filter_input(INPUT_POST, 'Age', FILTER_VALIDATE_INT);
        if (!$fname || !$lname || !$age) {
            $alert = "vul de juiste data in";
        } else {
            $query = $db->prepare('INSERT INTO students (first_name, last_name, Age) VALUES (:first_name, :last_name, :Age)');
            $query->bindParam('first_name', $fname);
            $query->bindParam('last_name', $lname);
            $query->bindParam('Age', $age);
            if ($query->execute()) {
                header('location: index1.php');
            } else {
                $alert = "Er is iets mis gegaan";
            }
        }
    } else {
        $alert = "Vul alle velden in";
    }
} else {
    $alert = "test";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test php</title>
</head>
<body>

<form method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="Age">Age</label>
        <input type="text" name="Age" id="Age">
    </p>
  <button name="submit">send</button>
</form>
<?= $alert ?>
</body>
</html>