<?php
namespace wuwenhan\systeminfo;


class Systeminfo
{
    public static function getSystem()
    {
        return php_uname();
    }

    public static function getShortsystem()
    {
        return php_uname('s');
    }
    public function getSystemr()
    {
        return php_uname('r');
    }
    public function getPhpsapi()
    {
        return php_sapi_name();
    }
    public function getPhpversion()
    {
        return PHP_VERSION;
    }
    public function getServerip()
    {
        return GetHostByName($_SERVER['SERVER_NAME']);
    }

}