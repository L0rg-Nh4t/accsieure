<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => 'localhost', // mysql host service
'USERNAME' => 'thoangtuantk_shopbanacc', // username
'PASSWORD' => 'Tuan2019@', // password
'DATABASE' => 'thoangtuantk_shopbanacc', // database name

'facebook_app_id' => '682052955848797',
'facebook_app_key' => '5c7b0082470a483fdf96313af1609612',
'home' => 'https://shopsieucap.cf',

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php' // Không thay đổi
);
?>