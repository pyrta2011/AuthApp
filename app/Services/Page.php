<?php


namespace App\Services;


class Page
{
    public static function page($title) {
        require_once "views/components/pages/". $title . ".php";
    }
}