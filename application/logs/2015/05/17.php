<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-17 06:12:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categoryArr ~ APPPATH\views\index.php [ 26 ] in Z:\home\morya.lan\www\application\views\index.php:26
2015-05-17 06:12:19 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 26, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Index.php(10): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\index.php:26
2015-05-17 06:33:38 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\category.php [ 24 ] in Z:\home\morya.lan\www\application\views\category.php:24
2015-05-17 06:33:38 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\category.php(24): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\morya.l...', 24, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Category.php(13): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_list()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\category.php:24
2015-05-17 06:34:35 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\category.php [ 24 ] in Z:\home\morya.lan\www\application\views\category.php:24
2015-05-17 06:34:35 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\category.php(24): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\morya.l...', 24, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Category.php(13): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_list()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\category.php:24
2015-05-17 11:08:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: category_id ~ APPPATH\views\category.php [ 55 ] in Z:\home\morya.lan\www\application\views\category.php:55
2015-05-17 11:08:44 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\category.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 55, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Category.php(14): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_list()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\category.php:55
2015-05-17 11:42:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: notice ~ APPPATH\views\item.php [ 63 ] in Z:\home\morya.lan\www\application\views\item.php:63
2015-05-17 11:42:06 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\item.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 63, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Item.php(15): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Item->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Item))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\item.php:63
2015-05-17 12:02:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::removeNoticeImg() ~ APPPATH\classes\Controller\Admin.php [ 121 ] in file:line
2015-05-17 12:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 12:03:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::removeNoticeImg() ~ APPPATH\classes\Controller\Admin.php [ 121 ] in file:line
2015-05-17 12:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 12:05:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::removeNoticeImg() ~ APPPATH\classes\Controller\Admin.php [ 121 ] in file:line
2015-05-17 12:05:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line