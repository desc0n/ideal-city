<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-14 14:10:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: productsArr ~ APPPATH\views\catalog_table.php [ 18 ] in Z:\home\teleantenna.lan\www\application\views\catalog_table.php:18
2015-04-14 14:10:01 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\catalog_table.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 18, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\catalog_services.php(19): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(337): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php(57): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_services()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\catalog_table.php:18
2015-04-14 14:10:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: product_img ~ APPPATH\views\catalog_table.php [ 54 ] in Z:\home\teleantenna.lan\www\application\views\catalog_table.php:54
2015-04-14 14:10:26 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\catalog_table.php(54): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 54, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\catalog_services.php(19): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(337): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php(57): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_services()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\catalog_table.php:54
2015-04-14 14:14:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: product_info ~ APPPATH\views\item.php [ 4 ] in Z:\home\teleantenna.lan\www\application\views\item.php:4
2015-04-14 14:14:50 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\item.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 4, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\template.php(337): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Item.php(30): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Item->action_service()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Item))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\item.php:4
2015-04-14 14:36:36 --- CRITICAL: View_Exception [ 0 ]: The requested view admin_redact_services could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-04-14 14:36:36 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin_redact_se...')
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin_redact_se...', NULL)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(685): Kohana_View::factory('admin_redact_se...')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactservices()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-04-14 14:39:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::setServiceInfo() ~ APPPATH\classes\Controller\Admin.php [ 662 ] in file:line
2015-04-14 14:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line