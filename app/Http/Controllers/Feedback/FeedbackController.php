<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $message = $request->message;
        $txt = '';
        if (!empty($name) && !empty($phone)){
            if (isset($name)) {
                if (!empty($name)){
                    $name = strip_tags($name);
                    $nameFieldset = "Имя пославшего: ";
                }
            }
            if (isset($phone)) {
                if (!empty($phone)){
                    $phone = strip_tags($phone);
                    $phoneFieldset = "Телефон: ";
                }
            }
            if (isset($message)) {
                if (!empty($message)){
                    $message = strip_tags($message);
                    $themeFieldset = "Тема: ";
                }
            }
            $token = "1026444594:AAGkI6Tfvqw_VMydLWXmnK3_U4MG8Gpih-g";
            $chat_id = "-295683968";
            $arr = [
                $nameFieldset => $name,
                $phoneFieldset => $phone,
                $themeFieldset => $message
            ];
            foreach($arr as $key => $value) {
                $txt .= "<b>".$key."</b> ".$value."%0A";
            };
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
            if ($sendToTelegram) {
                return (['message' => 'Сообщение отправленно успешно']);
            }
            else {
                return (['message' => 'Произошла ошибка, сообщение не отправленно']);
            }
        }
        else {
            return (['message' => 'Поля имя и телефон не могут быть пустыми']);
        }
    }
}
