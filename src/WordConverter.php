<?php
namespace WordConverter;

class WordConverter
{
    /**
     * Reverse words
     * @param string $word
     * 
     * @return string $reversed
     */
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