<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-02 16:55:23 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`returns_goods`, CONSTRAINT `returns_goods_ibfk_3` FOREIGN KEY (`shop_id`) REFERENCES `shopes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `returns_goods` (`return_id`, `product_id`, `price`, `num`) values ('6', '4', '2000', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-02 16:55:23 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `re...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(914): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(297): Model_Admin->createReturnFromRealization(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_realization()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-02 17:22:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::getCashCloseList() ~ APPPATH\classes\Controller\Admin.php [ 416 ] in file:line
2015-02-02 17:22:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 17:25:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cashclose_count ~ APPPATH\classes\Controller\Admin.php [ 418 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:418
2015-02-02 17:25:56 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(418): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 418, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_cash()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:418
2015-02-02 17:42:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cashreturnsCount ~ APPPATH\views\admin_cash.php [ 173 ] in Z:\home\teleantenna.lan\www\application\views\admin_cash.php:173
2015-02-02 17:42:54 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_cash.php(173): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 173, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(424): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_cash()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_cash.php:173