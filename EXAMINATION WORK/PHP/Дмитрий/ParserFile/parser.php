    <link rel="stylesheet" type="text/css" href="css/style.css" />

<?php

$getFile = '/Applications/MAMP/htdocs/ParserFile/file/';
$file = $getFile.$_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
    $a =  end(explode(".", $file));
				
} else {
    echo "Файл не загружен";
}



if($a == jpg){
	echo "<div class='parse'>Вы загрузили файл формата<img src='img/jpg.png'></div>";
						
}elseif($a == png){
    echo "<div class='parse'>Вы загрузили файл формата<img src='img/png.png'></div>";
}
elseif($a == html){
    echo "<div class='parse'>Вы загрузили файл формата<img src='img/html.png'></div>";
}
elseif($a == js){
    echo "<div class='parse'>Вы загрузили файл формата<img src='img/js.png'></div>";
}
elseif($a == css){
    echo "<div class='parse'>Вы загрузили файл формата<img src='img/css.png'></div>";
}
elseif($a == php){
    echo "<div class='parse'>Вы загрузили файл формата<img src='img/php.png'></div>";
}
elseif($a == ""){
    echo "<div class='parse'>Вы не выбрали файл<img src='img/error.png'></div>";
}
else{
    echo "<div class='parse'>Вы загрузили неизвестный формат файла<img src='img/error.png'></div>";
}
?>