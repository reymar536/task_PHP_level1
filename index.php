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
            echo "$i &nbsp;";   
           }     
           $i=$i+1;     
        }
    ?>
    <h2> Задание №2</h2>    
    <?php 
        $i = 0;
        do {
           $p = $i%2; 
           if ($i==0){echo "$i - Это ноль <br>";}  
           elseif($p==0){echo "$i - четное число <br>";}
           else{echo "$i - нечетное число <br>";}
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
    <h2> Задание №4</h2>   
    <?php
        function rus2translit($string) {
            $converter = array(
                'а' => 'a',   'б' => 'b',   'в' => 'v',
                'г' => 'g',   'д' => 'd',   'е' => 'e',
                'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
                'и' => 'i',   'й' => 'y',   'к' => 'k',
                'л' => 'l',   'м' => 'm',   'н' => 'n',
                'о' => 'o',   'п' => 'p',   'р' => 'r',
                'с' => 's',   'т' => 't',   'у' => 'u',
                'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
                'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
                'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
                
                'А' => 'A',   'Б' => 'B',   'В' => 'V',
                'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
                'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                'О' => 'O',   'П' => 'P',   'Р' => 'R',
                'С' => 'S',   'Т' => 'T',   'У' => 'U',
                'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
                'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
                'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
            );
            return strtr($string, $converter);
        }
        echo rus2translit("У попа была собака, он ее любил.");
    ?>
    <h2> Задание №5</h2>  
    <?php
        function my_str_replace($string){
            $arr1 = str_split($string); 
            for ( $i = 0 ; $i < count ($arr1); $i ++)
            {
                if ($arr1[$i]==' '){
                    $arr1[$i]='_'; 
                }
            }
            return implode ('', $arr1);  
        }
            
        $str = "Hello Friend";
        echo my_str_replace($str);
    ?>
    <h2>Задание №6</h2>  
    <?php
        $menu = array( 
            array('id'=>1,'title'=>'Menu 1',          'parent_id'=>null),
            array('id'=>2,'title'=>'Sub 1.1',         'parent_id'=>1),
            array('id'=>3,'title'=>'Sub 1.2',         'parent_id'=>1),
            array('id'=>4,'title'=>'Sub 1.3',         'parent_id'=>1),
            array('id'=>5,'title'=>'Menu 2',          'parent_id'=>null),
            array('id'=>6,'title'=>'Sub 2.1',         'parent_id'=>5),
            array('id'=>7,'title'=>'Sub Sub 2.1.1',   'parent_id'=>6),
            array('id'=>8,'title'=>'Sub 2.2',         'parent_id'=>5),
            array('id'=>9,'title'=>'Menu 3',          'parent_id'=>null),
        );
        
        function has_children($rows,$id) {
            foreach ($rows as $row) {
              if ($row['parent_id'] == $id)
                return true;
            }
            return false;
        }

        function build_menu($rows,$parent=0)
        {  
            $result = "<ul>";
            foreach ($rows as $row)
            {
              if ($row['parent_id'] == $parent){
                $result.= "<li>{$row['title']}";
                if (has_children($rows,$row['id']))
                  $result.= build_menu($rows,$row['id']);
                $result.= "</li>";
              }
            }
            $result.= "</ul>";
          
            return $result;
        }
        echo build_menu($menu);
    ?>
    <h2>Задание №7</h2>  
    <?php
        for($i=0;$i<10;print $i++){ };
    ?>    
    <h2>Задание №8</h2>  
    <?php
        foreach ( $regionArray as $region_key => $region_value)
        {
            echo  "<strong>$region_key</strong><br/>";
            foreach ($region_value as $key => $value)   
            {
                if(substr($value,0,2)=='К'){
                    echo "$value<br/>";     
                }
            }
        }
    ?>  

<hr>
<footer>&copy; <?php echo date('Y'); ?> Все права защищены.</footer>
</body>
</html>