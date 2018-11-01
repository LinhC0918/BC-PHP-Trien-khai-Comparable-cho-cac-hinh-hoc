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
<?php
include 'ComparableCircle.php';

$circles[0] = new ComparableCircle('circleOne', 50);
$circles[1] = new ComparableCircle('circleTwo', 60);
$circles[2] = new ComparableCircle('circleThree', 40);
echo ('Pre-sorted: <br>');
foreach ($circles as $circle) {
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}
sort($circles);
echo ('After-sorted: <br>');
foreach ($circles as $circle) {
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}
?>
</body>
</html>