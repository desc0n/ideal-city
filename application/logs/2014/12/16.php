<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-16 13:53:10 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Shop::getCity(), called in Z:\home\teleantenna.lan\www\application\views\admin_add_cities.php on line 15 and defined ~ APPPATH\classes\Model\Shop.php [ 4 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:4
2014-12-16 13:53:10 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php(4): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\application\views\admin_add_cities.php(15): Model_Shop->getCity()
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\teleantenna.lan\www\application\views\admin_template.php(218): Kohana_View->__toString()
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(120): Kohana_Response->body(Object(View))
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addcities()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Shop.php:4
2014-12-16 13:56:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.city' doesn't exist [ insert into `city` (`name`) values ('Владивосток') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-12-16 13:56:53 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `ci...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(240): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(106): Model_Admin->addCity(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addcities()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-12-16 13:57:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::removeCity() ~ APPPATH\classes\Controller\Admin.php [ 110 ] in file:line
2014-12-16 13:57:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-16 14:12:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: group_2_data ~ APPPATH\views\admin_add_shops.php [ 6 ] in Z:\home\teleantenna.lan\www\application\views\admin_add_shops.php:6
2014-12-16 14:12:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_add_shops.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 6, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(218): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(141): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addshops()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_add_shops.php:6
2014-12-16 14:26:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Shop::getShop() ~ APPPATH\views\admin_add_shopes.php [ 16 ] in file:line
2014-12-16 14:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-16 14:32:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: group_1_data ~ APPPATH\views\admin_add_shopes.php [ 26 ] in Z:\home\teleantenna.lan\www\application\views\admin_add_shopes.php:26
2014-12-16 14:32:21 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_add_shopes.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 26, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(218): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(141): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addshops()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_add_shopes.php:26
2014-12-16 14:33:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\Admin.php [ 261 ] in file:line
2014-12-16 14:33:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-16 14:34:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\Admin.php [ 271 ] in file:line
2014-12-16 14:34:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-16 14:34:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: remveocity ~ APPPATH\classes\Model\Admin.php [ 249 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:249
2014-12-16 14:34:25 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(249): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 249, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(110): Model_Admin->removeCity(Array)
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addcities()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:249