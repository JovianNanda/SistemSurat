<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($id)) : ?>
        <h1>Surat Masuk no <?= $id  ?></h1>
    <?php else : ?>
        <h1>Surat Masuk Ni Brow!</h1>
    <?php endif; ?>
</body>

</html>