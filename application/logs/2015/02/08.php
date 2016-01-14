<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-08 06:20:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Model\Users.php [ 43 ] in file:line
2015-02-08 06:20:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 06:24:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: get ~ APPPATH\views\admin_users.php [ 5 ] in Z:\home\teleantenna.lan\www\application\views\admin_users.php:5
2015-02-08 06:24:41 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_users.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 5, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(527): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_users.php:5
2015-02-08 06:35:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Shop::getShopes() ~ APPPATH\views\admin_users.php [ 64 ] in file:line
2015-02-08 06:35:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-08 11:55:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: order_id ~ APPPATH\views\print_realization.php [ 20 ] in Z:\home\teleantenna.lan\www\application\views\print_realization.php:20
2015-02-08 11:55:21 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\print_realization.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 20, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(539): Kohana_Response->body(Object(View))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_print_realization()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\teleantenna.lan\www\application\views\print_realization.php:20
2015-02-08 11:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\print_realization.php [ 56 ] in Z:\home\teleantenna.lan\www\application\views\print_realization.php:56
2015-02-08 11:56:35 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\print_realization.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 56, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(539): Kohana_Response->body(Object(View))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_print_realization()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\teleantenna.lan\www\application\views\print_realization.php:56