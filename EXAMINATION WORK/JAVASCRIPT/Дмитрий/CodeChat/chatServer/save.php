<?
	$fileGet = json_decode(file_get_contents("save.txt"), true);

	$res = $_POST["chatData"];
	$res = json_decode($res, true);
	
		if(array_key_exists($res["room"], $fileGet["rooms"])){
				var_dump("Ключ найден");
				$fileGet["rooms"][$res["room"]]["messages"][] = array("nick"=>$res["nick"], "textChat"=>$res["textChat"]);
		
		}else{
				$fileGet["rooms"][$res["room"]] = array("messages" => array()); // ["rooms" => ["123" => ["message" => []]]]
				$fileGet["rooms"][$res["room"]]["messages"][] = array("nick"=>$res["nick"], "textChat"=>$res["textChat"]);
				var_dump("Новый массив");

		}
	$data = json_encode($fileGet);
	
	$file = fopen("save.txt", "w");
	fwrite($file, $data);
	fclose($file);
?>

