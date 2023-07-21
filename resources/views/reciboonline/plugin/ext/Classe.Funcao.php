<?php
class Funcao 
{
   
    public static function espaco( $numLinha ) {

        $linha = "";

        for ($i=0 ; $i < $numLinha ; $i++) {
            $linha .= "&nbsp;";
        }
        return $linha;

    }
    public static function linha( $numLinha ) {

        $linha = "";

        for ($i=0 ; $i < $numLinha ; $i++) {
            $linha .= "_";
        }
        return $linha;

    }
 
            
}?>