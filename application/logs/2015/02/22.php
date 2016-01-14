<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-22 08:14:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Cart::setDeliveryType() ~ APPPATH\classes\Controller\Ajax.php [ 119 ] in file:line
2015-02-22 08:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-22 08:14:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Cart::setDeliveryType() ~ APPPATH\classes\Controller\Ajax.php [ 119 ] in file:line
2015-02-22 08:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-22 08:14:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Cart::setDeliveryType() ~ APPPATH\classes\Controller\Ajax.php [ 119 ] in file:line
2015-02-22 08:14:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-22 08:47:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Order::getLimit() ~ APPPATH\classes\Model\Order.php [ 61 ] in file:line
2015-02-22 08:47:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-22 12:18:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'field list' [ insert into `orders_delivery_info`
 			(`user_id`, `delivery_type`, `name`, `phone`, `email`, `street`, `house`, `flat`, `comment`, `shop_id`, `order_id`, `user_type`)
 			 values ('11', 0, '', '', '', '', '', '', '', '6', '3', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 12:18:25 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `or...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(188): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(135): Model_Order->insertOrderDeliveryInfo(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(61): Model_Order->setOrderDeliveryInfo(Array)
#4 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(33): Model_Order->createOrder(Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#11 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 12:19:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comment' in 'field list' [ insert into `orders_delivery_info`
 			(`delivery_type`, `name`, `phone`, `email`, `street`, `house`, `flat`, `comment`, `shop_id`, `order_id`, `user_type`)
 			 values (0, '', '', '', '', '', '', '', '6', '4', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 12:19:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `or...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(186): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(135): Model_Order->insertOrderDeliveryInfo(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(61): Model_Order->setOrderDeliveryInfo(Array)
#4 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(33): Model_Order->createOrder(Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#11 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 12:39:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: realization_id ~ APPPATH\views\realization.php [ 2 ] in Z:\home\teleantenna.lan\www\application\views\realization.php:2
2015-02-22 12:39:32 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\realization.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 2, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(564): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_order()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\realization.php:2
2015-02-22 12:43:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: realization_status ~ APPPATH\views\order.php [ 19 ] in Z:\home\teleantenna.lan\www\application\views\order.php:19
2015-02-22 12:43:16 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\order.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 19, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(564): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_order()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\order.php:19
2015-02-22 12:43:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: root_num ~ APPPATH\views\order.php [ 34 ] in Z:\home\teleantenna.lan\www\application\views\order.php:34
2015-02-22 12:43:51 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\order.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 34, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(564): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_order()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\order.php:34
2015-02-22 12:45:27 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`rg`.*
		from `orders` `r`
		inner join `orders_goods` `rg`
			on `r`.`id` = ' at line 5 [ select `p`.`name` as `product_name`,
		`p`.`code` as `product_code`,
		`r`.`status_id` as `order_status`,
		ifnull((select `pn`.`num` from `products_num` `pn` where `pn`.`product_id` = `p`.`id` and `pn`.`shop_id` = `rg`.`shop_id` limit 0,1),0) as `root_num`
		`rg`.*
		from `orders` `r`
		inner join `orders_goods` `rg`
			on `r`.`id` = `rg`.`order_id`
		inner join `products` `p`
			on `rg`.`product_id` = `p`.`id`
		where `rg`.`order_id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 12:45:27 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `p`.`nam...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Order.php(118): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(560): Model_Order->getOrderData('3')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_order()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 13:10:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::getOrderData() ~ APPPATH\classes\Model\Admin.php [ 1682 ] in file:line
2015-02-22 13:10:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-22 13:11:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.realization_goods' doesn't exist [ insert into `realization_goods` (`realization_id`, `product_id`, `shop_id`, `price`, `num`) values ('18', '4', '5', '2000', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-22 13:11:01 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `re...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(1691): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(551): Model_Admin->createRealizationFromOrder(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_order()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251