<?php
use App\Services\App;
session_start();
require_once __DIR__ . '/vendor/autoload.php';
App::start();
require_once __DIR__ . '/routes/routes.php';





