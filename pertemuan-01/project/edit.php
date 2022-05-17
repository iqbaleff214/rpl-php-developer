<?php
    require_once './app/model.php';

    if (!isset($_GET['id'])) {
        header('Location: ./index.php');
        exit();
    }

    $current_user = $user->getById($_GET['id']);

    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['id'])) {
        $data = [
            'name' => $_POST['name'],
            'address' => $_POST['address']
        ];

        $result = $user->update($data, ['id' => $_POST['id']]);

        if ($result) {
            header('Location: ./index.php');
            exit();
        }

        echo 'Gagal mengedit!';

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
        <input type="hidden" name="id" id="id" value="<?= $current_user['id'] ?>">
        <input type="text" name="name" id="name" value="<?= $current_user['name'] ?>" placeholder="Name" required>
        <input type="text" name="address" id="address" value="<?= $current_user['address'] ?>" placeholder="Address" required>
        <input type="submit" value="Save">
    </form>
</body>
</html>