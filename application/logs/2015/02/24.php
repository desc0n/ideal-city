<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-24 16:39:45 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Index.php [ 22 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php:22
2015-02-24 16:39:45 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(22): Kohana_Core::error_handler(2, 'Creating defaul...', 'Z:\home\teleant...', 22, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php:22
2015-02-24 16:40:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\ajax.php [ 1 ] in Z:\home\teleantenna.lan\www\application\views\ajax.php:1
2015-02-24 16:40:00 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\ajax.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 1, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(348): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(26): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\ajax.php:1
2015-02-24 17:16:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\classes\Model\Order.php [ 202 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Order.php:202
2015-02-24 17:16:41 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(202): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 202, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(63): Model_Order->sendSms(Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(33): Model_Order->createOrder(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Order.php:202
2015-02-24 17:17:39 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Order.php [ 202 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Order.php:202
2015-02-24 17:17:39 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(202): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\teleant...', 202, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(63): Model_Order->sendSms(Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(33): Model_Order->createOrder(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Order.php:202
2015-02-24 17:18:05 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Model\Order.php [ 208 ] in file:line
2015-02-24 17:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line