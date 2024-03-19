<?php
$dsn = "mysql:host=localhost;dbname=blog_basket;charset=utf8;port=3306";
$user = "admin_blog_basket";
$pass = "Password(2024";
$pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$stmt = $pdo->query("SELECT * FROM product");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Basket</title>
</head>
<body>
<h1>Products</h1>

<?php foreach ($products as $product): ?>
    <h2><?= $product['name'] ?></h2>
    <p><?= $product['description'] ?></p>
<?php endforeach; ?>

</body>
</html>
