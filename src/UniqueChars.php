<?php
namespace Src;

class UniqueChars 
{   
    public static $cache = [];
    public function CountUniqueChars(string $string): int
    {   
        if(!key_exists($string, self::$cache))
        {
            $strToArr = mb_str_split($string);
            $count = array_count_values($strToArr);
            $uniqChars = [];
            foreach($count as $num)
            {
                if($num == 1)
                {
                    $uniqChars[] = $num;
                }
            }
            self::$cache[$string] = count($uniqChars);
        }
      return self::$cache[$string];
    }   
}