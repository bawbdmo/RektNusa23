<?php
if ($_POST["pw"] != null) {
if ($_POST["pw"] == "your password") {
?><html>
<style>
button {
    background-color: white;
    border: 2px solid #999999;
    color: #999999;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 3px;
    -webkit-transition-duration: 0.2s; 
    transition-duration: 0.2s;
}

button:hover {
    background-color: #0099ff;
    color: white;
    border: 2px solid #0099ff;
}
</style></html><?
echo "<center>" . file_get_contents("Logs.txt") . "</center>";
}
}
