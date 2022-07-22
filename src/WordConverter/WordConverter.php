<?php
namespace WordConverter;

class WordConverter
{
    public static function reverse(string $word)
    {
        $reversed = "";

        $tmp = "";
        
        for($i = 0; $i < strlen($word); $i++) {
            if($word[$i] == " ") {
                $reversed .= $tmp . " ";
                $tmp = "";
                continue;
            }
            $tmp = $word[$i] . $tmp;    
        }
        $reversed .= $tmp;

        return $reversed;
    }
}


?>