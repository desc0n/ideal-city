<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 13:44:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\profile_menu.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-17 13:44:32 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\profile_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\orders.php(1): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(371): Kohana_View->__toString()
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
2015-02-17 13:51:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\profile_menu.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\profile_menu.php:4
2015-02-17 13:51:30 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\profile_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\orders.php(1): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(371): Kohana_View->__toString()
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
2015-02-17 14:04:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\views\orders.php [ 6 ] in Z:\home\teleantenna.lan\www\application\views\orders.php:6
2015-02-17 14:04:28 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\orders.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 6, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(371): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(40): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\orders.php:6
2015-02-17 14:05:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\views\orders.php [ 6 ] in Z:\home\teleantenna.lan\www\application\views\orders.php:6
2015-02-17 14:05:03 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\orders.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 6, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(371): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(40): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\orders.php:6
2015-02-17 14:06:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\views\orders.php [ 6 ] in Z:\home\teleantenna.lan\www\application\views\orders.php:6
2015-02-17 14:06:26 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\orders.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 6, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(371): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(40): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\orders.php:6
2015-02-17 14:07:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: root_page ~ APPPATH\classes\Controller\Profile.php [ 38 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php:38
2015-02-17 14:07:46 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 38, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php:38
2015-02-17 15:08:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':realization_id, '4', '5', '2000', '2')' at line 1 [ insert into `orders_goods` (`order_id`, `product_id`, `shop_id`, `price`, `num`) values (:realization_id, '4', '5', '2000', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 15:08:28 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `or...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(1662): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Profile.php(33): Model_Admin->createOrder(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Profile->action_orders()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 15:20:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: realizationData ~ APPPATH\views\orders.php [ 108 ] in Z:\home\teleantenna.lan\www\application\views\orders.php:108
2015-02-17 15:20:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\orders.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 108, Array)
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
#16 {main} in Z:\home\teleantenna.lan\www\application\views\orders.php:108