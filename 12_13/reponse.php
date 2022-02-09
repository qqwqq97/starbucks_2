<?
$irum = $_POST["irum"];
$tel = $_POST["tel"];
$job = $_POST["job"];

$array = Array(
    "이름" => $irum,
    "전화" => $tel,
    "소속" => $job
);
$json = json_encode($array, JSON_UNESCAPED_UNICODE);
$file = file_put_contents('./data/member.json', $json);


echo $json;
?>