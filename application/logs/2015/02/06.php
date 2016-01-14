<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-06 13:15:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Product.php [ 89 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Product.php:89
2015-02-06 13:15:53 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(89): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\teleant...', 89, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(172): Model_Product->getProductInfo('1')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproducts()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Product.php:89