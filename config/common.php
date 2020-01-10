<?php

return [

    /*
    |--------------------------------------------------------------------------
    | site settings
    |--------------------------------------------------------------------------
    |
    */

    'contacts' => [
        'phone' => '+79887651515',                  // контактный телефон
        'phoneShort' => '',
        'phoneFormatted' => '+7-988-765-1515',
        'phone2' => '',                  // контактный телефон
        'phone2Formatted' => '',      // контактный телефон отформатированный
        'email' => 'info@lifeservice.pro',              // email который отображается на сайте
        'fromEmail' => env('MAIL_FROM_ADDRESS'),    // email с которого идет рассылка
        'toEmail' => [                              // адреса, на которые идет рассылка
            'lavshuk87@mail.ru'
        ]
    ],

    //разрешенные страницы
    'pages' => [
        'gallery',
        'contacts',
        'feedback',
    ],



];
