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