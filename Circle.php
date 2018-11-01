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
class Circle
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}
?>
</body>
</html>