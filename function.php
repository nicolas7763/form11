<?php
error_reporting(-1);
$ot = 0;
   $not = 0;
   $answer = filter_input(INPUT_POST, 'answer');
   if ($answer == 'a'){
       $ot++;
   } else {
       $not++;
}
 
 
 //var_dump($answer);
 if($name = filter_input(INPUT_POST, 'name') and ($ot > $not)){
     $text = $name . ' поздравляем!!! Тест пройден успешно!!!';
 } else {
    $text =  $name. ' Тест не пройден! Попробуйте еще раз.' ;  
}      
 //var_dump($name);
 //$text = $name . ' поздравляем! Тест пройден успешно!';
// var_dump($text);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Тест</title>
</head>
<body>
<h1><?=$text?></h1>   

<p><a href="list.php">Выбрать другой тест.</a></p>
<p><b>Правильных ответов: <?php echo $ot; ?></b></p>
<p><b>Неправильных ответов: <?php echo $not; ?></b></p>
<img src ="image.php" alt="Рисунок">

</body>
</html>