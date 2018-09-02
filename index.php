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
    <h2> Задание №3</h2>        
    <?php 
        $regionArray['Московская область'] = array('Москва', 'Зеленоград', 'Клин');
        $regionArray['Ленинградская область'] = array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'); 
        $regionArray['Рязанская область'] = array('Рязань', 'Спасск-Рязанский', 'Михайлов', 'Новомичуринск'); 

        foreach ( $regionArray as $region_key => $region_value)
        {
            echo  "<strong>$region_key</strong><br/>";
            for ( $i = 0 ; $i < count ($region_value); $i ++)   
            {
                echo "$region_value[$i]<br/>"; 
            }
        }
    ?>

<hr>
<footer>&copy; <?php echo date('Y'); ?> Все права защищены.</footer>
</body>
</html>