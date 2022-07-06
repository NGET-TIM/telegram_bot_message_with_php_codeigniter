<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->library('telegrambot'); 

        // $api = "5384172866:AAF_IDKdtU6HxO4rctjP-0OuEBqkqU-XCA4"; #ci3
        $api = "5383981712:AAH8AlIahUmEyQKKLUqPDZNqJVCmGgSrtaE"; # Tim laravel
        $strongly_api = "5389334812:AAG0MxS9cqjUSL5O5pzF2QkHAAU3qrsMNVk";
        $c_id = "-698152613";
        $chat_id = "-739260230";
        $message = "Hello Bro, Can You Select ABC With Me !";

        # other ways to send file to
        // $curl = curl_init();
        // $data = curl_setopt_array($curl, [
        //   CURLOPT_URL => 'https://api.telegram.org/bot'.$api.'/sendDocument?chat_id='.$chat_id,
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS => array('document'=> new CURLFILE(base_url('/assets/test.xlsx'))),
        // ]);
        // $response = curl_exec($curl);
        // curl_close($curl);

        // $file = ['document'=> new CURLFILE(base_url('/assets/test.xlsx'))];
        $file = base_url('/assets/test.xlsx');
        // $file = base_url('/assets/3.png');
        $if_sent = $this->telegram_lib->senddoc($api, $chat_id, $file, $message);
        if(!$if_sent['ok']) {
            echo 'You Failed to Send Message'; exit;
        } else {
            echo '<pre>';
            print_r($if_sent);
            echo '</pre>';
        }
        
        $this->load->view('welcome_message');
    }
}
