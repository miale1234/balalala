<?php include 'db.php';
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM agenda WHERE id=$id");
$row = $res->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['nume']; $t = $_POST['telefon']; $e = $_POST['email'];
    $conn->query("UPDATE agenda SET nume='$n', telefon='$t', email='$e' WHERE id=$id");
    header("Location: index.php");
} ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="container">
        <form method="POST">
            <input type="text" name="nume" value="<?= $row['nume'] ?>">
            <input type="text" name="telefon" value="<?= $row['telefon'] ?>">
            <input type="email" name="email" value="<?= $row['email'] ?>">
            <button type="submit" class="btn">Actualizează</button>
        </form>
    </div>
</body>
</html>