<?php

$name = trim(htmlspecialchars($_POST['name']));
$value = trim(htmlspecialchars($_POST['value']));

function validevar($name, $value){
//Проверка заполнены ли поля
	if(!empty($name) and !empty($value)){
//Проверка стоит ли цифра в начале	
		if((int)$name[0]){
			$result = "Имя переменной не должно начинаться с цифры";
		}
//Проверка на отсутствие пробелов в имени переменной 
		elseif(!(str_replace(' ','',$name) === $name)) {
			$result = "Строка содержит пробелы!";
		}
		else{
			$result = $name.' : '.$value;
		}
	}else{
		$result = 'Проверьте, все ли поля были заполнены';
	}
	
	echo $result;
}
$res = validevar($name, $value);
?>
