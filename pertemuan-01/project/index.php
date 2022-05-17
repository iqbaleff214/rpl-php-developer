<?php require_once './app/model.php' ?>

<?php

if (isset($_GET['delete'])) {
    $result = $user->deleteById($_GET['delete']);

    if ($result) {
        header('Location: ./index.php');
        exit();
    }

    echo 'Gagal menghapus!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data</title>
</head>
<body>
    <a href="./create.php">Create New User</a>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th></th>
        </tr>
        <?php foreach($user->getAll() as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['address'] ?></td>
            <td>
                <a href="?delete=<?= $user['id'] ?>">Hapus</a>
                <a href="./edit.php?id=<?= $user['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>