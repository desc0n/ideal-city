<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-17 13:42:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 48 ] in Z:\home\avz125.ru\www\application\views\template.php:48
2014-06-17 13:42:48 --- DEBUG: #0 Z:\home\avz125.ru\www\application\views\template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avz125....', 48, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#2 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#3 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\avz125.ru\www\application\classes\Controller\Index.php(8): Kohana_Response->body(Object(View))
#6 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avz125.ru\www\application\views\template.php:48