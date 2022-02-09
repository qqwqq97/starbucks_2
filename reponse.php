<?
$subject = $_POST["subject"];
$content = $_POST["content"];


$array = Array(
    "제목" => $subject,
    "할일내용" => $content,
    
);
$response = json_encode($array, JSON_UNESCAPED_UNICODE);
$savefile = file_put_contents('./data/todo.json', $response);


echo $response;
?>