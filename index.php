<?php
$t1='Домашнее задание к урокам базовый курс PHP';
$h1 = 'Домашнее задание к уроку 4';
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
        function excess($files) {
            $result = array();
            for ($i = 0; $i < count($files); $i++) {
                if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
            }
            return $result;
          }
        $dir = "images"; 
        $files = scandir($dir); 
        $files = excess($files); 
    ?>

    <?php for ($i = 0; $i < count($files); $i++)
     { ?>
    <img class = "image" src="<?=$dir."/".$files[$i]?>" alt="" />
    <?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
    <?php } ?>    
    
<hr>
<footer>&copy; <?php echo date('Y'); ?> Все права защищены.</footer>
</body>
</html>