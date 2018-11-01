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
include 'Circle.php';
include 'Comparable.php';

class ComparableCircle extends Circle implements Comparable
{
    public function compareTo($circleOne, $circleTwo)
    {
        $circleOneRadius = $circleOne->getRadius();
        $circleTwoRadius = $circleTwo->getRadius();
        if ($circleOneRadius > $circleTwoRadius) {
            return 1;
        } else if ($circleOneRadius < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
    public function __construct($name, $radius)
    {
        parent::__construct($name,$radius);
    }

}
?>
</body>
</html>