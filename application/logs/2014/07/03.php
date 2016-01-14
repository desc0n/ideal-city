<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-03 16:04:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php:1299
2014-07-03 16:04:03 --- DEBUG: #0 Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 Z:\home\avz125.ru\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(8): Model_Auth_User->create_user(Array, Array)
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php:1299
2014-07-03 16:04:48 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php:1299
2014-07-03 16:04:48 --- DEBUG: #0 Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 Z:\home\avz125.ru\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(8): Model_Auth_User->create_user(Array, Array)
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avz125.ru\www\modules\orm\classes\Kohana\ORM.php:1299
2014-07-03 16:16:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password_confirm ~ APPPATH\classes\Controller\Registration.php [ 37 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:37
2014-07-03 16:16:31 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 37, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:37
2014-07-03 16:17:03 --- CRITICAL: View_Exception [ 0 ]: The requested view error could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avz125.ru\www\system\classes\Kohana\View.php:137
2014-07-03 16:17:03 --- DEBUG: #0 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('error')
#1 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('error', NULL)
#2 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(61): Kohana_View::factory('error')
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avz125.ru\www\system\classes\Kohana\View.php:137
2014-07-03 16:17:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Registration.php [ 65 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:65
2014-07-03 16:17:38 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 65, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:65
2014-07-03 16:18:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Registration.php [ 65 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:65
2014-07-03 16:18:22 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avz125....', 65, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:65
2014-07-03 16:18:52 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Registration.php [ 81 ] in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:81
2014-07-03 16:18:52 --- DEBUG: #0 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(81): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\avz125....', 81, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avz125.ru\www\application\classes\Controller\Registration.php:81
2014-07-03 16:40:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Auth::login(), called in Z:\home\avz125.ru\www\application\views\template.php on line 19 and defined ~ MODPATH\auth\classes\Kohana\Auth.php [ 87 ] in Z:\home\avz125.ru\www\modules\auth\classes\Kohana\Auth.php:87
2014-07-03 16:40:00 --- DEBUG: #0 Z:\home\avz125.ru\www\modules\auth\classes\Kohana\Auth.php(87): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\avz125....', 87, Array)
#1 Z:\home\avz125.ru\www\application\views\template.php(19): Kohana_Auth->login()
#2 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#3 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#4 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(100): Kohana_Response->body(Object(View))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\avz125.ru\www\modules\auth\classes\Kohana\Auth.php:87
2014-07-03 16:40:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Auth::login(), called in Z:\home\avz125.ru\www\application\views\template.php on line 19 and defined ~ MODPATH\auth\classes\Kohana\Auth.php [ 87 ] in Z:\home\avz125.ru\www\modules\auth\classes\Kohana\Auth.php:87
2014-07-03 16:40:30 --- DEBUG: #0 Z:\home\avz125.ru\www\modules\auth\classes\Kohana\Auth.php(87): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\avz125....', 87, Array)
#1 Z:\home\avz125.ru\www\application\views\template.php(19): Kohana_Auth->login('login')
#2 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#3 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#4 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(100): Kohana_Response->body(Object(View))
#7 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\avz125.ru\www\modules\auth\classes\Kohana\Auth.php:87
2014-07-03 16:43:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Registration.php [ 101 ] in :
2014-07-03 16:43:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-03 16:43:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Registration.php [ 17 ] in :
2014-07-03 16:43:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-07-03 16:57:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\registration.php [ 17 ] in Z:\home\avz125.ru\www\application\views\registration.php:17
2014-07-03 16:57:45 --- DEBUG: #0 Z:\home\avz125.ru\www\application\views\registration.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avz125....', 17, Array)
#1 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#2 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#3 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avz125.ru\www\application\views\template.php(65): Kohana_View->__toString()
#5 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\avz125....')
#6 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avz125....', Array)
#7 Z:\home\avz125.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\avz125.ru\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\avz125.ru\www\application\classes\Controller\Registration.php(107): Kohana_Response->body(Object(View))
#10 Z:\home\avz125.ru\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 Z:\home\avz125.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\avz125.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\avz125.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\avz125.ru\www\application\views\registration.php:17
2014-07-03 16:58:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\classes\Controller\Registration.php [ 96 ] in :
2014-07-03 16:58:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :