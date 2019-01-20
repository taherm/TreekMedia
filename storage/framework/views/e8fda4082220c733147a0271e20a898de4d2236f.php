<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>TreekMedia <?php echo e($data['type']); ?> E-Mail</h1>
    <p>Event Title: <?php echo e($data['name']); ?></p>
    <p>From date: <?php echo e($data['from']); ?></p>
    <p>To date: <?php echo e($data['to']); ?></p>
    <p>Message: <?php echo e($data['message']); ?></p>
</body>
</html>