<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-26 16:31:51 --- CRITICAL: ErrorException [ 2 ]: fopen(course/jpy_val.js) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Ajax.php [ 96 ] in :
2014-11-26 16:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(course/jp...', 'Z:\home\teleant...', 96, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(96): fopen('course/jpy_val....', 'w')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getjpyval()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2014-11-26 16:31:52 --- CRITICAL: ErrorException [ 2 ]: fopen(course/usd_val.js) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Ajax.php [ 43 ] in :
2014-11-26 16:31:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(course/us...', 'Z:\home\teleant...', 43, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(43): fopen('course/usd_val....', 'w')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getusdval()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2014-11-26 16:32:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Debug.php [ 112 ] in :
2014-11-26 16:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-11-26 16:32:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in :
2014-11-26 16:32:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-11-26 16:32:23 --- CRITICAL: ErrorException [ 2 ]: fopen(course/usd_val.js) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Ajax.php [ 43 ] in :
2014-11-26 16:32:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(course/us...', 'Z:\home\teleant...', 43, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(43): fopen('course/usd_val....', 'w')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getusdval()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2014-11-26 16:32:50 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Debug.php [ 218 ] in :
2014-11-26 16:32:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-11-26 17:06:50 --- CRITICAL: View_Exception [ 0 ]: The requested view input could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2014-11-26 17:06:50 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('input')
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('input', NULL)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(7): Kohana_View::factory('input')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2014-11-26 17:25:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: admin_menu ~ APPPATH\views\admin_template.php [ 191 ] in Z:\home\teleantenna.lan\www\application\views\admin_template.php:191
2014-11-26 17:25:59 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_template.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 191, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(11): Kohana_Response->body(Object(View))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\teleantenna.lan\www\application\views\admin_template.php:191
2014-11-26 17:29:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\views\admin_menu.php [ 2 ] in Z:\home\teleantenna.lan\www\application\views\admin_menu.php:2
2014-11-26 17:29:08 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 2, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(191): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(14): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_menu.php:2
2014-11-26 17:29:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\classes\Controller\Admin.php [ 23 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:23
2014-11-26 17:29:31 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 23, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addgoods()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:23
2014-11-26 17:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\classes\Controller\Admin.php [ 23 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:23
2014-11-26 17:29:51 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 23, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addgoods()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:23