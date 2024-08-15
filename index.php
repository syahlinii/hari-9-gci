<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   require"animal.php";
   require"ape.php";
   require"frog.php";

    $sheep = new animal ("shaun");
    $sungokong = new ape ("kera sakti");
    $kodok = new frog ("buduk");

    echo $sheep->$name;
    echo "<br>";
    echo $sheep->$cold_blooded;
    echo "<br>";
    echo $sungokong->yell();
    echo "<br>";
    echo $kodok->jump();
    echo "<br><br>";
    
    echo "name:".$sheep->name."<br>";
    echo "legs:".$sheep->legs."<br>";
    echo "cold blooded:".$sheep->cold_blooded."<br><br>";

    echo "name:".$sungokong->name."<br>";
    echo "legs:".$sungokong->legs."<br>";
    echo "cold blooded:".$sungokong->cold_blooded."<br>";
    echo "yell:".$kodok->yell."<br><br>";
  

    echo "name:".$kodok->name."<br>";
    echo "legs:".$kodok->legs."<br>";
    echo "cold blooded:".$kodok->cold_blooded."<br>";
    echo "jump:".$kodok->jump."<br><br>";
?>
</body>
</html>