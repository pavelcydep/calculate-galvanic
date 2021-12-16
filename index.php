<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<h1>Калькулятор корректировщика</h1>

<form action='' method='post'>
  <div class="sm-3">
    <label for="exampleInputEmail1" class="form-label">Вещество(граммы)</label>
    <input type="text" name="number1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Объем (литры)</label>
    <input type="text" name="number2" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">Результат</button>
</form>
</div>



	
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	//$operation = $_POST['operation'];
	
	// Валидация
	if( (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
		$error_result = 'Не все поля заполнены';

	}
    else {
	    
		if(!is_numeric($number1) || !is_numeric($number2)){
			$error_result = "Операнды должны быть числами";
		}
		else 
        
		{
			$result = $number1 / 1000 * $number2;
		}
	}   
	  if(isset($error_result)){
    	echo "<div class='error-text'>Ошибка: $error_result</div>";
    }	
    elseif(is_numeric($result)) {
	    echo "<div class='answer-text'>Ответ: $result</div>";
    }
}
?>
