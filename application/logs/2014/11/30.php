<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-30 07:19:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH\classes\Controller\Registration.php [ 8 ] in file:line
2014-11-30 07:19:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-30 07:20:32 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'captcha' at 'MODPATH\captcha' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in Z:\home\teleantenna.lan\www\application\bootstrap.php:122
2014-11-30 07:20:32 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#1 Z:\home\teleantenna.lan\www\index.php(102): require('Z:\home\teleant...')
#2 {main} in Z:\home\teleantenna.lan\www\application\bootstrap.php:122
2014-11-30 07:26:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Registration.php [ 23 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php:23
2014-11-30 07:26:47 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 23, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php:23
2014-11-30 07:28:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Registration.php [ 23 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php:23
2014-11-30 07:28:35 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 23, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php:23
2014-11-30 07:35:56 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Registration.php [ 28 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php:28
2014-11-30 07:35:56 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php(28): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\teleant...', 28, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Registration.php:28
2014-11-30 08:05:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\template.php [ 185 ] in file:line
2014-11-30 08:05:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-30 08:33:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2014-11-30 08:33:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-30 09:35:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: add_group ~ APPPATH\classes\Model\Admin.php [ 48 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:48
2014-11-30 09:35:38 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 48, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(22): Model_Admin->addProduct(Array)
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addproducts()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:48
2014-11-30 09:36:54 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`teleante_main`.`products`, CONSTRAINT `products_ibfk_3` FOREIGN KEY (`group_3`) REFERENCES `products_group_3` (`id`)) [ delete from `products_group_3` where `id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-11-30 09:36:54 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'delete from `pr...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(42): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(47): Model_Admin->removeGroup(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addproductsgroup()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-11-30 09:54:21 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`teleante_main`.`products`, CONSTRAINT `products_ibfk_6` FOREIGN KEY (`group_3`) REFERENCES `products_group_3` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ insert into `products` (`name`, `group_1`, `group_2`, `group_3`) values ('SVEC 0,6', '1', '2', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-11-30 09:54:21 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `pr...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(55): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(22): Model_Admin->addProduct(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addproducts()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-11-30 10:05:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Model\Product.php [ 18 ] in file:line
2014-11-30 10:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-30 10:13:43 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\classes\Model\Product.php [ 27 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Product.php:27
2014-11-30 10:13:43 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(27): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\teleant...', 27, Array)
#1 Z:\home\teleantenna.lan\www\application\views\admin_add_products.php(76): Model_Product->getProduct(2, '2')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\teleantenna.lan\www\application\views\admin_template.php(194): Kohana_View->__toString()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(36): Kohana_Response->body(Object(View))
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addproducts()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Product.php:27
2014-11-30 10:16:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: group_2data ~ APPPATH\views\admin_add_products.php [ 76 ] in Z:\home\teleantenna.lan\www\application\views\admin_add_products.php:76
2014-11-30 10:16:44 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_add_products.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 76, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(194): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(36): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addproducts()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_add_products.php:76