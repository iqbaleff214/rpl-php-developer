<?php
    require_once './app/model.php';

    if (isset($_POST['name']) && isset($_POST['address'])) {
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address']
        ];

        $result = $user->insert($data);

        if ($result) {
            header('Location: ./index.php');
            exit();
        }

        echo 'Gagal menambahkan!';

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./index.php">Back</a>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="text" name="address" id="address" placeholder="Address" required>
        <input type="submit" value="Save">
    </form>
</body>
</html>