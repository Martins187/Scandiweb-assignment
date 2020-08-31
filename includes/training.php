 <!DOCTYPE html>
<?php
    include 'classes/newclass.class.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $person1 = new Person();
    // $person1->setName("Martins");

    // $person2 = new Person();
    // $person2->setName("Timmy");
    // echo $person2->name;

    $person3 = new Person("Janis", "green","10");
    echo $person3->name."<br>";
    echo $person3->eyeColor."<br>";
    echo $person3->getName();
    unset($object3);

   

    
    ?>
</body>
</html>