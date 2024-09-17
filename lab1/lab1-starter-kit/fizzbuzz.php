<?php
// Lab 1, part 2
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, Part 2</title>
</head>

<body>

    <?php for ($i = 1; $i <= 100; $i++): ?>
        <?php if ($i % 3 === 0 && $i % 5 === 0): ?>
            <p><strong>FizzBuzz</strong></p>
        <?php elseif ($i % 3 === 0): ?>
            <p><strong>Fizz</strong></p>
        <?php elseif ($i % 5 === 0): ?>
            <p><strong>Buzz</strong></p>
        <?php else: ?>
            <p><?= $i ?></p>
        <?php endif; ?>
    <?php endfor; ?>

</body>

</html>