<?php

use IT\Employee;
use IT\Programmer;
use IT\Render;
use IT\Tester;
use IT\Manager;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



    $employee = new Programmer('Jonas','Jonaitis','PHP');
    $employee->changeFirstName('Beata');
    $employee->changeSecondName('Grazulyte');
    Render::display($employee->getAllInfo());



    ?>


</body>

</html>
