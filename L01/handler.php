<?php

class InvalidCharacterException extends RuntimeException
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message);
    }
}

class FileNotFoundException extends RuntimeException
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message);
    }
}

class InputHandler
{
    public static function handler($var)
    {
        $forbidden = array('\0', '\\', '\'', '"');

        if (stristr($var, "..")) {
            throw new InvalidCharacterException("Invalid characters exists !!");
        }

        foreach ($forbidden as $char) {
            while (strpos($var, $char) !== false) {
                $var = str_replace($char, '', $var);
            }
        }

        $file = "api/v1/logs/" .  $var;

        include($file);
        return 1;


        throw new FileNotFoundException("File cannot be found");

    }
}
