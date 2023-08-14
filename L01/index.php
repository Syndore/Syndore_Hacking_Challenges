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
