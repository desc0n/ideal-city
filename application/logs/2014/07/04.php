<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-04 13:47:20 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 36 ] in Z:\home\avz125.ru\www\application\classes\Controller\Index.php:36
2014-07-04 13:47:20 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Index.php(36): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\avz125....', 36, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Index.php:36
2014-07-04 13:47:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 36 ] in Z:\home\avz125.ru\www\application\classes\Controller\Index.php:36
2014-07-04 13:47:25 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Index.php(36): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\avz125....', 36, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Index.php:36
2014-07-04 13:51:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2014-07-04 13:51:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-04 13:51:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2014-07-04 13:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-04 13:54:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: x ~ APPPATH\classes\Controller\Index.php [ 28 ] in Z:\home\avz125.ru\www\application\classes\Controller\Index.php:28
2014-07-04 13:54:52 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avz125....', 28, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Index.php:28
2014-07-04 14:15:06 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avz125.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 14:15:06 --- DEBUG: #0 Z:\home\avz125.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avz125.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 14:17:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avz125.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 14:17:22 --- DEBUG: #0 Z:\home\avz125.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avz125.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-07-04 14:18:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\classes\Controller\Registration.php [ 96 ] in :
2014-07-04 14:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-04 14:20:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post_username ~ APPPATH\views\main.php [ 18 ] in Z:\home\avz125.ru\www\application\views\main.php:18
2014-07-04 14:20:38 --- DEBUG: #0 Z:\home\avz125.ru\www\application\views\main.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avz125....', 18, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#2 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#3 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avz125.ru\www\application\views\template.php(65): Kohana_View->__toString()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#6 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#7 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\avz125.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\avz125.ru\www\application\classes\Controller\Index.php(43): Kohana_Response->body(Object(View))
#10 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\avz125.ru\www\application\views\main.php:18
2014-07-04 14:36:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fio ~ APPPATH\views\registration.php [ 12 ] in Z:\home\avz125.ru\www\application\views\registration.php:12
2014-07-04 14:36:07 --- DEBUG: #0 Z:\home\avz125.ru\www\application\views\registration.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avz125....', 12, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#2 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#3 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avz125.ru\www\application\views\template.php(65): Kohana_View->__toString()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#6 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#7 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\avz125.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(108): Kohana_Response->body(Object(View))
#10 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\avz125.ru\www\application\views\registration.php:12
2014-07-04 14:36:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fio ~ APPPATH\classes\Controller\Registration.php [ 16 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:16
2014-07-04 14:36:24 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avz125....', 16, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:16
2014-07-04 14:46:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password_confirm ~ APPPATH\classes\Controller\Registration.php [ 55 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:55
2014-07-04 14:46:05 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 55, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:55
2014-07-04 14:46:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\classes\Controller\Registration.php [ 98 ] in :
2014-07-04 14:46:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-04 14:50:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\classes\Controller\Registration.php [ 98 ] in :
2014-07-04 14:50:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-04 14:55:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Registration.php [ 111 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:111
2014-07-04 14:55:48 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 111, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:111
2014-07-04 14:56:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Registration.php [ 111 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:111
2014-07-04 14:56:06 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 111, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:111
2014-07-04 14:56:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Registration.php [ 110 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:110
2014-07-04 14:56:41 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 110, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:110
2014-07-04 14:56:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Registration.php [ 110 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:110
2014-07-04 14:56:42 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 110, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:110