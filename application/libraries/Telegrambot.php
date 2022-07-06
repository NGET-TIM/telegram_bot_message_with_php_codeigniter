<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/libraries/telegram/Telegram_lib.php";

class Telegrambot extends Telegram_lib
{
    public function __construct()
    {
        parent::__construct();
    }
}
