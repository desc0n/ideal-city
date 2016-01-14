<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-21 07:38:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.quest_cart' doesn't exist [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		(select sum(`c2`.`num`) from `cart` `c2` where `c2`.`user_id` = '1')  as `cart_num`,
		ifnull((select `i`.`src` from `products_imgs` `i` where `i`.`product_id` = `p`.`id`  and  `i`.`status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `quest_cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:38:34 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(34): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(28): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:38:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.quest_cart' doesn't exist [ select `c`.*,
		`p`.`id` as `product_id`,
		`p`.`code` as `product_code`,
		`p`.`name` as `product_name`,
		`p`.`short_description` as `product_short_description`,
		(select sum(`c2`.`num`) from `cart` `c2` where `c2`.`user_id` = '1')  as `cart_num`,
		ifnull((select `i`.`src` from `products_imgs` `i` where `i`.`product_id` = `p`.`id`  and  `i`.`status_id` = 1 limit 0,1), 'nopic.jpg') as `product_img`
		from `quest_cart` `c`
		inner join `products` `p`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:38:34 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(34): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(41): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:39:20 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`guest_cart`, CONSTRAINT `guest_cart_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shopes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `guest_cart` (`user_id`, `shop_id`, `product_id`, `price`, `num`) values ('1', 0, '9', '0', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:39:20 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `gu...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(100): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(77): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:40:25 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`guest_cart`, CONSTRAINT `guest_cart_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shopes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `guest_cart` (`user_id`, `shop_id`, `product_id`, `price`, `num`) values ('1', 0, '9', '0', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:40:25 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `gu...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(100): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(77): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:45:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'status_id' in 'where clause' [ select `shop_id` from `shopes_managers` where `status_id` = 1 limit 0,1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 07:45:34 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `shop_id...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(59): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(97): Model_Shop->getManagerShop()
#3 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(77): Model_Cart->insertIntoCart(Array)
#4 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#11 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-21 09:41:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Cart::$cart_table_customer ~ APPPATH\classes\Model\Cart.php [ 131 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php:131
2015-02-21 09:41:02 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(131): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\teleant...', 131, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(139): Model_Cart->getCartCustomer(Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(109): Model_Cart->setInCartCustomer(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_cart_customer()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php:131
2015-02-21 09:41:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Cart::$cart_table_customer ~ APPPATH\classes\Model\Cart.php [ 131 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php:131
2015-02-21 09:41:50 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(131): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\teleant...', 131, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(139): Model_Cart->getCartCustomer(Array)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(109): Model_Cart->setInCartCustomer(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_cart_customer()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php:131
2015-02-21 15:23:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: customerCartInfo ~ APPPATH\views\orders.php [ 52 ] in Z:\home\teleantenna.lan\www\application\views\orders.php:52
2015-02-21 15:23:49 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\orders.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 52, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(348): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(45): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\orders.php:52
2015-02-21 15:25:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: customerCartInfo ~ APPPATH\views\orders.php [ 52 ] in Z:\home\teleantenna.lan\www\application\views\orders.php:52
2015-02-21 15:25:04 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\orders.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 52, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(348): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(45): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\orders.php:52