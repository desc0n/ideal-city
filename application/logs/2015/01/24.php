<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-24 09:05:06 --- CRITICAL: View_Exception [ 0 ]: The requested view realizations_list could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-01-24 09:05:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('realizations_li...')
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('realizations_li...', NULL)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(231): Kohana_View::factory('realizations_li...')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_realizations_list()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-01-24 09:15:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_name ~ APPPATH\views\realizations_list.php [ 26 ] in Z:\home\teleantenna.lan\www\application\views\realizations_list.php:26
2015-01-24 09:15:17 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\realizations_list.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 26, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(237): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_realizations_list()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\realizations_list.php:26
2015-01-24 09:47:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' `shop_id` = '4'' at line 1 [ update `products_num` set `num` = '1' where `product_id` = '4', `shop_id` = '4' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 09:47:11 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'update `product...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(425): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(219): Model_Admin->carryOutRealization(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_realization()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 09:47:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: removeRealizationPosition ~ APPPATH\classes\Model\Admin.php [ 429 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:429
2015-01-24 09:47:38 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(429): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 429, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(219): Model_Admin->carryOutRealization(Array)
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_realization()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:429
2015-01-24 10:42:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\views\realization.php [ 68 ] in Z:\home\teleantenna.lan\www\application\views\realization.php:68
2015-01-24 10:42:21 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\realization.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 68, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(231): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_realization()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\realization.php:68
2015-01-24 13:50:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.incomes' doesn't exist [ insert into `incomes` (`user_id`, `date`) values ('11', now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 13:50:03 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `in...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(490): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(252): Model_Admin->addNewIncome()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_income()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 13:56:21 --- CRITICAL: View_Exception [ 0 ]: The requested view income could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-01-24 13:56:21 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('income')
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('income', NULL)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(266): Kohana_View::factory('income')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_income()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-01-24 14:00:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::getIncomeData() ~ APPPATH\classes\Controller\Admin.php [ 270 ] in file:line
2015-01-24 14:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-24 14:01:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::getIncomeStatus() ~ APPPATH\views\income.php [ 57 ] in file:line
2015-01-24 14:01:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-24 15:22:31 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.documents_status_history' doesn't exist [ insert into `documents_status_history` (`income_id`, `status_id`, `user_id`, `date`) values ('1', 2, '11', now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 15:22:31 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `do...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(588): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(261): Model_Admin->carryOutIncome(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_income()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 15:23:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'income_id' in 'field list' [ insert into `realizations_status_history` (`income_id`, `status_id`, `user_id`, `date`) values ('1', 2, '11', now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 15:23:20 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `re...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(588): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(261): Model_Admin->carryOutIncome(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_income()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 15:23:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'income_id' in 'field list' [ insert into `incomes_status_history` (`income_id`, `status_id`, `user_id`, `date`) values ('1', 2, '11', now()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 15:23:36 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `in...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(588): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(261): Model_Admin->carryOutIncome(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_income()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 15:40:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\Admin.php [ 575 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:575
2015-01-24 15:40:58 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(575): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 575, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(261): Model_Admin->carryOutIncome(Array)
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_income()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:575
2015-01-24 15:50:59 --- CRITICAL: View_Exception [ 0 ]: The requested view incomes_list could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-01-24 15:50:59 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('incomes_list')
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('incomes_list', NULL)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(281): Kohana_View::factory('incomes_list')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_incomes_list()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137