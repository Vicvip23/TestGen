<!DOCTYPE html>
<html>
<head>
    <?php
    $conn = mysqli_connect('localhost','root','', 'testgen');
    $query = 'SELECT * FROM questions';
    $result = mysqli_query($conn, $query);
    ?>
</head>
<body>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        var_dump($row);
    }
    ?>
</body>
</html>