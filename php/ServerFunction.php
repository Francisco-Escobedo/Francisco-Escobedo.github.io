<?php

class ServerFunction{
    
    public static function generateAdjective(){

        $adjective = ['adorable', 'bewildered', 'vengeful', 'relieved', 'fearless', 'cruel', 'bright', 'cooperative', 'diligent', 'glowing', 'filthy', 'scruffy', 'vivacious', 'embarrassed', 'defeated', 'brave'];

        $displayedAdjective = $adjective[mt_rand(0, count($adjective) - 1)];

        return $displayedAdjective;
        }

    public static function generateNoun(){

        $nouns = ['chaos', 'balance', 'advantage', 'age', 'force', 'fiasco', 'celebration', 'caution', 'benefit', 'aim', 'death', 'beauty', 'comedy', 'disgrace', 'bias', 'concept', 'famine', 'humanity', 'illness'];

        $displayedNoun = $nouns[mt_rand(0, count($nouns)-1)];

        return $displayedNoun;
    }

    public static function serverName(){
       return self::generateAdjective() . ' ' . self::generateNoun();
    }

}

?>
