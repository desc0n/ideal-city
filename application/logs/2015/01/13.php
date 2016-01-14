<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-13 14:35:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search_data ~ APPPATH\views\admin_redact_products.php [ 84 ] in Z:\home\teleantenna.lan\www\application\views\admin_redact_products.php:84
2015-01-13 14:35:06 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_redact_products.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 84, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(218): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(91): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproducts()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_redact_products.php:84
2015-01-13 15:36:19 --- CRITICAL: View_Exception [ 0 ]: The requested view item could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137
2015-01-13 15:36:19 --- DEBUG: #0 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('item')
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('item', NULL)
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Item.php(8): Kohana_View::factory('item')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Item->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Item))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php:137