<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syndore Web Challenge 1</title>
</head>
<body>
    <!--
        Mustafa there is an uuid in my secret folder -> L3NlY3JldC9zZWNyZXQudHh0
        You understand that. Just please keep safe it for me. 
        Thank you brother !
    -->
</body>
</html>


<?php
require_once("./handler.php");
if (isset($_GET["variable"])) {
    try {
        $var = $_GET["variable"];
        $result = InputHandler::handler($var);
        return 1;
    } catch (\InvalidCharacterException $th) {
        echo $th->getMessage();
        return 0;
    } catch (\FileNotFoundException $th) {
        echo $th->getMessage();
        return 0;
    }
};
throw new Error("Variable missing");
