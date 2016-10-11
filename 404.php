<!DOCTYPE html>
<html>
<head>
	<title>404!Ошибка</title>
	<style>
   .fig {
    text-align: center; /* Выравнивание по центру */ 
   }
  </style>
</head>
<body>
    <p class="fig"><img src="../image/404.jpg" alt="Ошибка 404"></p>
<?php
http_response_code(404);
echo "Такого теста не существует! Пожалуйста, выберите тест из указанных в списке!";
 ?>
</body>
</html>