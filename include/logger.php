<?php
class logger {
    public static function addEvent ($type, $file, $line, $errorMessage = '') {
        global $cfg;
 
        $date = date ($cfg['logger']['datetime_format']);
        $ip   = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
 
        $log = "$type||$file||$line||$date||$ip||$userAgent||$errorMessage|=|";
        file_put_contents ($cfg['logger']['logs_dir'].'/errors.log', $log.PHP_EOL, FILE_APPEND);
    }
}
?>