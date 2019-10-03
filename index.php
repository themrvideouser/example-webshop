<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Welcome to my shop</h1>
<ul>
    <?php
        $json = file_get_contents('http://product-service');
        $obj = json_decode($json);

        $products = $obj->products;
        foreach ($products as $product) {
            echo "<li>$product</li>";
        }
    ?>
</ul>
</body>
</html>