<!DOCTYPE html>
<html>
<head>
    <title>Bai test dau vao</title>
</head>
<body>
<?php

for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'LizzBuzz';
    } elseif ($i % 3 == 0) {
        echo 'Lizz';
    } elseif ($i % 5 == 0) {
        echo 'Buzz';
    } else
        echo $i;


}
?>
</body>
</html>