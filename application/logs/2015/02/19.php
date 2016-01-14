<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-19 14:50:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Shop.php [ 44 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:44
2015-02-19 14:50:14 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\teleant...', 44, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(82): Model_Shop->getManagerShop()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(62): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:44
2015-02-19 14:55:44 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Shop.php [ 44 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:44
2015-02-19 14:55:44 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\teleant...', 44, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(82): Model_Shop->getManagerShop()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(62): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:44
2015-02-19 14:58:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Guestid' not found ~ APPPATH\classes\Model\Shop.php [ 10 ] in file:line
2015-02-19 14:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 14:59:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Guestid' not found ~ APPPATH\classes\Model\Shop.php [ 10 ] in file:line
2015-02-19 14:59:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 14:59:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Guestid' not found ~ APPPATH\classes\Model\Shop.php [ 10 ] in file:line
2015-02-19 14:59:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:00:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.d3_guest_id' doesn't exist [ insert into d3_guest_id values (null, '2229a5ef57e5fa36d03ef2e24e014a35' , UNIX_TIMESTAMP(),UNIX_TIMESTAMP()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:00:02 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into d3_...', false, Array)
#1 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(133): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(35): Kohana_Guestid->get_new_id()
#3 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(48): Kohana_Guestid->renew()
#4 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(10): Kohana_Guestid->get_id()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Model.php(26): Model_Shop->__construct()
#6 Z:\home\teleantenna.lan\www\application\views\template.php(102): Kohana_Model::factory('Shop')
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:03:10 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`cart`, CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `cart` (`user_id`, `shop_id`, `product_id`, `price`, `num`) values ('1', 0, '9', '0', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:03:10 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `ca...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(96): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(73): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:09:23 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`cart`, CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `cart` (`user_id`, `shop_id`, `product_id`, `price`, `num`) values ('1', 0, '9', '0', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:09:23 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `ca...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(96): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(73): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:12:28 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`cart`, CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `cart` (`user_id`, `shop_id`, `product_id`, `price`, `num`) values ('1', 0, '9', '0', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:12:28 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `ca...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(96): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(73): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:18:39 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ insert into users values (null, '06842942abd9bf24c1eeea5979377642' , UNIX_TIMESTAMP(),0,UNIX_TIMESTAMP()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:18:39 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into use...', false, Array)
#1 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(139): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(34): Kohana_Guestid->get_new_id()
#3 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(48): Kohana_Guestid->renew()
#4 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(19): Kohana_Guestid->get_id()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#11 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:19:46 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ insert into users values ('5c89fffb3b235dc268bd33fd75133982@tmp.ru', '5c89fffb3b235dc268bd33fd75133982' , UNIX_TIMESTAMP(),0,UNIX_TIMESTAMP()) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:19:46 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into use...', false, Array)
#1 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(139): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(35): Kohana_Guestid->get_new_id()
#3 Z:\home\teleantenna.lan\www\modules\guestid\classes\Kohana\Guestid.php(48): Kohana_Guestid->renew()
#4 Z:\home\teleantenna.lan\www\application\classes\Controller\Index.php(19): Kohana_Guestid->get_id()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#11 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:20:23 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`cart`, CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ insert into `cart` (`user_id`, `shop_id`, `product_id`, `price`, `num`) values ('0', 0, '9', '0', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-19 15:20:23 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `ca...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(96): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(73): Model_Cart->insertIntoCart(Array)
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(33): Model_Cart->setInCart(Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_set_in_cart()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251