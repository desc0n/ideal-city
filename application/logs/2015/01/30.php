<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-30 15:53:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'rg.writeoff_id' in 'where clause' [ select `p`.`name` as `product_name`,
		`r`.`status_id` as `writeoff_status`,
		`rg`.*,
		ifnull((select `pn`.`num` from `products_num` `pn` where `pn`.`product_id` = `p`.`id` and `pn`.`shop_id` = '4' limit 0,1),0) as `root_num`
		from `writeoffs` `r`
		inner join `writeoffs_goods` `rg`
			on `r`.`id` = `rg`.`writeoff_id`
		inner join `products` `p`
			on `rg`.`product_id` = `p`.`id`
		where `rg`.`writeoff_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-30 15:53:48 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `p`.`nam...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(914): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(378): Model_Admin->getWriteoffData('1')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_writeoff()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-30 15:57:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: Writeoff_id ~ APPPATH\views\writeoff.php [ 2 ] in Z:\home\teleantenna.lan\www\application\views\writeoff.php:2
2015-01-30 15:57:13 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\writeoff.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 2, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(381): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_writeoff()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\writeoff.php:2
2015-01-30 16:00:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\writeoff.php [ 79 ] in Z:\home\teleantenna.lan\www\application\views\writeoff.php:79
2015-01-30 16:00:10 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\writeoff.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 79, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(381): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_writeoff()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\writeoff.php:79
2015-01-30 16:01:46 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`realizations_goods`, CONSTRAINT `realizations_goods_ibfk_1` FOREIGN KEY (`realization_id`) REFERENCES `realizations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `realizations_goods` (`realization_id`, `product_id`, `price`, `num`) values ('0', '4', '2000', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-30 16:01:46 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `re...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(449): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(13): Model_Admin->addRealisationPosition(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_add_realisation_position()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-30 16:06:16 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`realizations_goods`, CONSTRAINT `realizations_goods_ibfk_1` FOREIGN KEY (`realization_id`) REFERENCES `realizations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `realizations_goods` (`realization_id`, `product_id`, `price`, `num`) values ('0', '4', '2000', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-30 16:06:16 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `re...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(449): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(13): Model_Admin->addRealisationPosition(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_add_realisation_position()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-30 16:08:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: return_status ~ APPPATH\views\writeoff.php [ 18 ] in Z:\home\teleantenna.lan\www\application\views\writeoff.php:18
2015-01-30 16:08:33 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\writeoff.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 18, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(381): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_writeoff()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\writeoff.php:18
2015-01-30 16:12:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: comment ~ APPPATH\views\admin_main_page.php [ 234 ] in Z:\home\teleantenna.lan\www\application\views\admin_main_page.php:234
2015-01-30 16:12:31 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_main_page.php(234): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 234, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(29): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_main_page.php:234