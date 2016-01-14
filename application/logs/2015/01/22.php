<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-22 16:16:08 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\Session.php:125
2015-01-22 16:16:08 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\teleantenna.lan\www\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\teleantenna.lan\www\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(9): Kohana_Auth::instance()
#5 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(208): Controller_Admin->check_role()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_new_realization()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\Session.php:125
2015-01-22 16:16:10 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Сделана попытка доступа к сокету методом, запрещенным правами доступа.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:430
2015-01-22 16:16:10 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('')
#2 [internal function]: Kohana_Database->quote('')
#3 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(15): Kohana_Database_Query->execute()
#6 Z:\home\teleantenna.lan\www\application\views\catalog_menu.php(9): Model_Product->getProductGroup(1)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\application\views\catalog.php(1): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#14 Z:\home\teleantenna.lan\www\application\views\template.php(366): Kohana_View->__toString()
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#19 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#20 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#21 [internal function]: Kohana_Controller->execute()
#22 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#23 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#25 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#26 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:430
2015-01-22 16:16:10 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Сделана попытка доступа к сокету методом, запрещенным правами доступа.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-22 16:16:10 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(28): Kohana_Database_Query->execute()
#3 Z:\home\teleantenna.lan\www\application\views\catalog.php(27): Model_Shop->getShop()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\teleantenna.lan\www\application\views\template.php(366): Kohana_View->__toString()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#12 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-22 16:16:39 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Сделана попытка доступа к сокету методом, запрещенным правами доступа.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:430
2015-01-22 16:16:39 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('')
#2 [internal function]: Kohana_Database->quote('')
#3 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(15): Kohana_Database_Query->execute()
#6 Z:\home\teleantenna.lan\www\application\views\catalog_menu.php(9): Model_Product->getProductGroup(1)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\application\views\catalog.php(1): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#14 Z:\home\teleantenna.lan\www\application\views\template.php(366): Kohana_View->__toString()
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#19 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#20 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#21 [internal function]: Kohana_Controller->execute()
#22 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#23 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#25 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#26 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:430
2015-01-22 16:16:39 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Сделана попытка доступа к сокету методом, запрещенным правами доступа.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-22 16:16:39 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(28): Kohana_Database_Query->execute()
#3 Z:\home\teleantenna.lan\www\application\views\catalog.php(27): Model_Shop->getShop()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\teleantenna.lan\www\application\views\template.php(366): Kohana_View->__toString()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#12 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-22 16:22:22 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Сделана попытка доступа к сокету методом, запрещенным правами доступа.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:430
2015-01-22 16:22:22 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('')
#2 [internal function]: Kohana_Database->quote('')
#3 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(15): Kohana_Database_Query->execute()
#6 Z:\home\teleantenna.lan\www\application\views\catalog_menu.php(9): Model_Product->getProductGroup(1)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\application\views\catalog.php(1): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#14 Z:\home\teleantenna.lan\www\application\views\template.php(366): Kohana_View->__toString()
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#19 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#20 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#21 [internal function]: Kohana_Controller->execute()
#22 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#23 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#25 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#26 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:430
2015-01-22 16:22:22 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Сделана попытка доступа к сокету методом, запрещенным правами доступа.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-22 16:22:22 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(28): Kohana_Database_Query->execute()
#3 Z:\home\teleantenna.lan\www\application\views\catalog.php(27): Model_Shop->getShop()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\teleantenna.lan\www\application\views\template.php(366): Kohana_View->__toString()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#12 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-22 16:44:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: root_num ~ APPPATH\views\realization.php [ 35 ] in Z:\home\teleantenna.lan\www\application\views\realization.php:35
2015-01-22 16:44:39 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\realization.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 35, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(223): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_new_realization()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\realization.php:35
2015-01-22 16:48:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user() ~ APPPATH\classes\Model\Shop.php [ 44 ] in file:line
2015-01-22 16:48:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-22 16:48:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Auth_ORM::$user ~ APPPATH\classes\Model\Shop.php [ 44 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:44
2015-01-22 16:48:55 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\teleant...', 44, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(351): Model_Shop->getManagerShop()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(220): Model_Admin->getRealizationData('1')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_new_realization()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:44
2015-01-22 16:49:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':manager_shop limit 0,1),0) as `root_num`
		from `realizations` `r`
		inner jo' at line 4 [ select `p`.`name` as `product_name`,
		`r`.`status_id` as `realization_status`,
		`rg`.*,
		ifnull((select `pn`.`num` from `products_num` where `pn`.`product_id` = `p`.`id` and `pn`.`shop_id` = :manager_shop limit 0,1),0) as `root_num`
		from `realizations` `r`
		inner join `realizations_goods` `rg`
			on `r`.`id` = `rg`.`realization_id`
		inner join `products` `p`
			on `rg`.`product_id` = `p`.`id`
		where `rg`.`realization_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-22 16:49:32 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `p`.`nam...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(364): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(220): Model_Admin->getRealizationData('1')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_new_realization()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-22 16:50:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'pn.num' in 'field list' [ select `p`.`name` as `product_name`,
		`r`.`status_id` as `realization_status`,
		`rg`.*,
		ifnull((select `pn`.`num` from `products_num` where `pn`.`product_id` = `p`.`id` and `pn`.`shop_id` = '4' limit 0,1),0) as `root_num`
		from `realizations` `r`
		inner join `realizations_goods` `rg`
			on `r`.`id` = `rg`.`realization_id`
		inner join `products` `p`
			on `rg`.`product_id` = `p`.`id`
		where `rg`.`realization_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-22 16:50:13 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `p`.`nam...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(365): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(220): Model_Admin->getRealizationData('1')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_new_realization()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251