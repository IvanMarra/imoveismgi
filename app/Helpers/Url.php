<?php
class Url {
    public static function redirecionar($url){
        if (!headers_sent()) {
            header("Location:".URL.DIRECTORY_SEPARATOR.$url, false);
                         } else {
                            echo "<meta http-equiv=\"refresh\" content=\"0;url=$url\">\r\n";
                            exit;
    }
}
}