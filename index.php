<?php
$t1='Домашнее задание к урокам базовый курс PHP';
$h1 = 'Домашнее задание к уроку 3';
$date= date("d-m-Y");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$t1?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1><?=$h1?></h1>
	<p><?=$date?></p>
	<h2> Задание №1</h2>
    <?php 
        $i = 0;
        while($i <= 100){
           $p = $i%3; 
           if ($p==0){
            echo "$i <br>";   
           }     
           $i=$i+1;     
        }
    ?>
    <h2> Задание №2</h2>    
    <?php 
        $i = 0;
        do {
           $p = $i%2; 
           if ($i==0){
                echo "$i - Это ноль <br>";   
           }  
           elseif($p==0){
                echo "$i - четное число <br>";  
           }
           else{
                echo "$i - нечетное число <br>"; 
           }
           $i=$i+1;     
        } while($i <= 10)   
    ?>


<hr>
<footer>&copy; <?php echo date('Y'); ?> Все права защищены.</footer>
</body>
</html>