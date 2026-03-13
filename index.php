<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Agenda</title>
</head>
<body>
    <div class="container">
        <h2>Agenda Mea</h2>
        <a href="add.php" class="btn">Adaugă Contact</a>
        <table>
            <tr><th>Nume</th><th>Tel</th><th>Acțiuni</th></tr>
            <?php
            $res = $conn->query("SELECT * FROM agenda");
            while($row = $res->fetch_assoc()): ?>
            <tr>
                <td><?= $row['nume'] ?></td>
                <td><?= $row['telefon'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $row['id'] ?>" style="color:red">Șterge</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>