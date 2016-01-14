<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-02 16:09:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_AS ~ APPPATH\views\admin_redact_products.php [ 46 ] in file:line
2014-12-02 16:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 16:51:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH\classes\Controller\Admin.php [ 70 ] in file:line
2014-12-02 16:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 17:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH\classes\Model\Admin.php [ 104 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:104
2014-12-02 17:27:13 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(104): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 104, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(76): Model_Admin->loadProductImg(Array, '4')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproducts()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php:104