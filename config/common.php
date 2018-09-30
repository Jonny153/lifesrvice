<?php

return [

    /*
    |--------------------------------------------------------------------------
    | site settings
    |--------------------------------------------------------------------------
    |
    */

    'contacts' => [
        'phone' => '+78617651515',                  // контактный телефон
        'phoneShort' => '65-15-15',
        'phoneFormatted' => '+7(8617) 65-15-15',
        'phone2' => '+79887651515',                  // контактный телефон
        'phone2Formatted' => '+7-988-765-1515',      // контактный телефон отформатированный
        'email' => 'info@lifeservice.pro',              // email который отображается на сайте
        'fromEmail' => env('MAIL_FROM_ADDRESS'),    // email с которого идет рассылка
        'toEmail' => [                              // адреса, на которые идет рассылка
            'j153.mobile@yandex.ru',
            //'lifenvrsk@yandex.ru',
            //'lavshuk87@mail.ru'
        ]
    ],

    //разрешенные страницы
    'pages' => [
        'gallery',
        'contacts',
        'feedback',
    ],



];
