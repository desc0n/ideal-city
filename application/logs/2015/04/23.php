<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-23 14:16:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:16:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:16:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:16:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:16:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:16:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:16:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:16:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:16:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:16:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:16:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:16:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:17:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Word' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-04-23 14:17:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 14:17:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.words' doesn't exist [ select * from `words` where `word` = '%ам%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 14:17:32 --- DEBUG: #0 Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\master-rus.lan\www\application\classes\Model\Word.php(20): Kohana_Database_Query->execute()
#2 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Model_Word->getWords(Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 14:17:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.words' doesn't exist [ select * from `words` where `word` = '%а%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 14:17:32 --- DEBUG: #0 Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\master-rus.lan\www\application\classes\Model\Word.php(20): Kohana_Database_Query->execute()
#2 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Model_Word->getWords(Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 14:18:04 --- CRITICAL: Database_Exception [ 1146 ]: Table 'xnsbpawb_main.guest_id' doesn't exist [ select id from guest_id where id = '100680' and md5sum = 'c0e1200fc915383972b7d787b7d102ab' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 14:18:04 --- DEBUG: #0 Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 Z:\home\master-rus.lan\www\modules\guestid\classes\Kohana\Guestid.php(105): Kohana_Database_Query->execute()
#2 Z:\home\master-rus.lan\www\modules\guestid\classes\Kohana\Guestid.php(60): Kohana_Guestid->check_id('100680', 'c0e1200fc915383...')
#3 Z:\home\master-rus.lan\www\modules\guestid\classes\Kohana\Guestid.php(23): Kohana_Guestid->get_id_from_session()
#4 Z:\home\master-rus.lan\www\modules\guestid\classes\Kohana\Guestid.php(47): Kohana_Guestid->renew()
#5 Z:\home\master-rus.lan\www\application\classes\Model\Word.php(10): Kohana_Guestid->get_id()
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Model.php(26): Model_Word->__construct()
#7 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Model::factory('Word')
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#14 {main} in Z:\home\master-rus.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 14:42:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 4 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:4
2015-04-23 14:42:46 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(4): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 4, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:4
2015-04-23 14:43:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 5 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:43:26 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 5, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:44:22 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 5 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:44:22 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 5, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:44:22 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 5 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:44:22 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(5): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 5, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:44:46 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\typeahead.php [ 5 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 14:44:46 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\master-...', 5, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:5
2015-04-23 15:00:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function mb_str_replace() ~ APPPATH\views\typeahead.php [ 4 ] in file:line
2015-04-23 15:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 16:29:58 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 2 ~ APPPATH\views\typeahead.php [ 5 ] in file:line
2015-04-23 16:29:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\master-...', 5, Array)
#1 Z:\home\master-rus.lan\www\application\views\typeahead.php(5): preg_replace('/??)/i', '<b>??</b>', '??????????')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#13 {main} in file:line
2015-04-23 16:29:59 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Compilation failed: unmatched parentheses at offset 4 ~ APPPATH\views\typeahead.php [ 5 ] in file:line
2015-04-23 16:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\master-...', 5, Array)
#1 Z:\home\master-rus.lan\www\application\views\typeahead.php(5): preg_replace('/????)/i', '<b>????</b>', '??????????')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#13 {main} in file:line
2015-04-23 16:35:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\typeahead.php [ 4 ] in file:line
2015-04-23 16:35:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 16:48:44 --- CRITICAL: ErrorException [ 2 ]: substr() expects at most 3 parameters, 4 given ~ APPPATH\views\typeahead.php [ 7 ] in file:line
2015-04-23 16:48:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'substr() expect...', 'Z:\home\master-...', 7, Array)
#1 Z:\home\master-rus.lan\www\application\views\typeahead.php(7): substr('??????????', 0, 1, 'UTF-8')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#13 {main} in file:line
2015-04-23 16:54:02 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 17 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:17
2015-04-23 16:54:02 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(17): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 17, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:17
2015-04-23 16:54:03 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 17 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:17
2015-04-23 16:54:03 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(17): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 17, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:17
2015-04-23 16:54:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\typeahead.php [ 17 ] in Z:\home\master-rus.lan\www\application\views\typeahead.php:17
2015-04-23 16:54:06 --- DEBUG: #0 Z:\home\master-rus.lan\www\application\views\typeahead.php(17): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\master-...', 17, Array)
#1 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#6 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\master-rus.lan\www\application\views\typeahead.php:17
2015-04-23 17:07:40 --- CRITICAL: ErrorException [ 2 ]: mb_strpos() expects parameter 3 to be long, string given ~ APPPATH\views\typeahead.php [ 8 ] in file:line
2015-04-23 17:07:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_strpos() exp...', 'Z:\home\master-...', 8, Array)
#1 Z:\home\master-rus.lan\www\application\views\typeahead.php(8): mb_strpos('??????????', '??????', 'UTF-8')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#13 {main} in file:line
2015-04-23 17:07:43 --- CRITICAL: ErrorException [ 2 ]: mb_strpos() expects parameter 3 to be long, string given ~ APPPATH\views\typeahead.php [ 8 ] in file:line
2015-04-23 17:07:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_strpos() exp...', 'Z:\home\master-...', 8, Array)
#1 Z:\home\master-rus.lan\www\application\views\typeahead.php(8): mb_strpos('??????????', '??', 'UTF-8')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#13 {main} in file:line
2015-04-23 17:07:43 --- CRITICAL: ErrorException [ 2 ]: mb_strpos() expects parameter 3 to be long, string given ~ APPPATH\views\typeahead.php [ 8 ] in file:line
2015-04-23 17:07:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_strpos() exp...', 'Z:\home\master-...', 8, Array)
#1 Z:\home\master-rus.lan\www\application\views\typeahead.php(8): mb_strpos('??????????', '????', 'UTF-8')
#2 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\master-...')
#3 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\master-...', Array)
#4 Z:\home\master-rus.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\master-rus.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 Z:\home\master-rus.lan\www\application\classes\Controller\Ajax.php(7): Kohana_Response->body(Object(View))
#7 Z:\home\master-rus.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_typeahead()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 Z:\home\master-rus.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\master-rus.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\master-rus.lan\www\index.php(119): Kohana_Request->execute()
#13 {main} in file:line
2015-04-23 17:09:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$word' (T_VARIABLE) ~ APPPATH\views\typeahead.php [ 12 ] in file:line
2015-04-23 17:09:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 17:09:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$word' (T_VARIABLE) ~ APPPATH\views\typeahead.php [ 12 ] in file:line
2015-04-23 17:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 17:09:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$word' (T_VARIABLE) ~ APPPATH\views\typeahead.php [ 12 ] in file:line
2015-04-23 17:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line