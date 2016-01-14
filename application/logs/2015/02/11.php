<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-11 17:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\profile_menu.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:02:24 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\profile_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\orders.php(1): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(370): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Orders.php(14): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Orders->action_index()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:02:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id' at line 6 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:02:24 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(18): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(24): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:03:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\profile_menu.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:03:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\profile_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\orders.php(1): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(370): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Orders.php(14): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Orders->action_index()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:03:06 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:03:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(25): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:04:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\profile_menu.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:04:47 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\profile_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\orders.php(1): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(370): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Orders.php(14): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Orders->action_index()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:04:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:04:47 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(25): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:05:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\profile_menu.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:05:27 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\profile_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\orders.php(1): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(370): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Orders.php(14): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Orders->action_index()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-11 17:05:27 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:05:27 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(25): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:05:29 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:05:29 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\views\profile_cart.php(18): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\teleantenna.lan\www\application\views\template.php(370): Kohana_View->__toString()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(53): Kohana_Response->body(Object(View))
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_cart()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:05:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `src` from `products_imgs` where `product_id` = `p`.`id`  and  `status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:05:30 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(25): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:06:46 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `i`.`src` from `products_imgs` `i` where `i`.`product_id` = `p`.`id`  and' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `i`.`src` from `products_imgs` `i` where `i`.`product_id` = `p`.`id`  and  `i`.`status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:06:46 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\views\profile_cart.php(18): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\teleantenna.lan\www\application\views\template.php(370): Kohana_View->__toString()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(53): Kohana_Response->body(Object(View))
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_cart()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:06:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'select `i`.`src` from `products_imgs` `i` where `i`.`product_id` = `p`.`id`  and' at line 7 [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		sum(`c`.`num`) as `cart_num`,
		ifnull(select `i`.`src` from `products_imgs` `i` where `i`.`product_id` = `p`.`id`  and  `i`.`status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-11 17:06:47 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(19): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(25): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251