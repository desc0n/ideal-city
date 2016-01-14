<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-26 16:33:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: product_img ~ APPPATH\views\search.php [ 36 ] in Z:\home\teleantenna.lan\www\application\views\search.php:36
2015-01-26 16:33:14 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\search.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 36, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(362): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Search.php(14): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\search.php:36
2015-01-26 16:51:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: postData ~ APPPATH\classes\Controller\Ajax.php [ 23 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php:23
2015-01-26 16:51:36 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 23, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php:23
2015-01-26 16:52:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\Cart.php [ 14 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php:14
2015-01-26 16:52:05 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 14, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(21): Model_Cart->getCart()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php:14
2015-01-26 16:52:24 --- CRITICAL: Database_Exception [ 1146 ]: Table 'p.products' doesn't exist [ select `c`.*,
		`p`.`name` as `product_name`
		from `cart` `c`
		inner join `p`.`products`
			on `c`.`product_id` = `p`.`id`
		where `c`.`user_id` = '11' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 16:52:24 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `c`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(15): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Model\Cart.php(21): Model_Cart->getCart()
#3 Z:\home\teleantenna.lan\www\application\classes\Controller\Ajax.php(23): Model_Cart->getCartNum()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_get_cart_num()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-01-26 17:22:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\Cart.php [ 52 ] in file:line
2015-01-26 17:22:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-26 17:22:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\Cart.php [ 52 ] in file:line
2015-01-26 17:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-26 17:23:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getCartProduct() ~ APPPATH\classes\Model\Cart.php [ 49 ] in file:line
2015-01-26 17:23:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-26 17:25:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getCartNum() ~ APPPATH\classes\Model\Cart.php [ 53 ] in file:line
2015-01-26 17:25:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line