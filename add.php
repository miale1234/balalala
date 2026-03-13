<?php include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['nume']; $t = $_POST['telefon']; $e = $_POST['email'];
    $conn->query("INSERT INTO agenda (nume, telefon, email) VALUES ('$n', '$t', '$e')");
    header("Location: index.php");
} ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="container">
        <form method="POST">
            <input type="text" name="nume" placeholder="Nume" required>
            <input type="text" name="telefon" placeholder="Telefon" required>
            <input type="email" name="email" placeholder="Email">
            <button type="submit" class="btn">Salvează</button>
        </form>
    </div>
</body>
</html>