<?php

class Verifica {

    public static function verificaNome($nome){
        if(!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $nome)):
            return true;
        else:
            return false;
        endif;
    }

    public static function verificaEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }

}