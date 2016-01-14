<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-04 15:03:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: group_2_parent_id ~ APPPATH\classes\Controller\Catalog.php [ 21 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php:21
2015-03-04 15:03:12 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 21, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php:21
2015-03-04 15:13:52 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Admin.php [ 103 ] in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:103
2015-03-04 15:13:52 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(103): Kohana_Core::error_handler(2, 'Creating defaul...', 'Z:\home\teleant...', 103, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_product()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php:103
2015-03-04 15:14:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\ajax.php [ 1 ] in Z:\home\teleantenna.lan\www\application\views\ajax.php:1
2015-03-04 15:14:09 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\ajax.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 1, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(224): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(106): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_product()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\ajax.php:1
2015-03-04 15:29:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\admin_product.php [ 426 ] in file:line
2015-03-04 15:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line