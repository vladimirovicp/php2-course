<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1><?php echo $titlePage; ?></h1>

    <?php if($message): ?>
    <p>Сообщение: <?=$message ?></p>
    <?php endif; ?>

    <form action="/lab4.1/?action=addbook" method="POST">
        <div><input type="text" name="title"></div>
        <div><input type="text" name="price"></div>
        <div><input type="submit"></div>
    </form>

</body>
</html>