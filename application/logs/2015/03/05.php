<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-05 15:32:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Product::getProductParams() ~ APPPATH\classes\Controller\Admin.php [ 189 ] in file:line
2015-03-05 15:32:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 15:33:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.product_params' doesn't exist [ select * from `product_params` where `product_id` = '1037' and `status_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-05 15:33:26 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(209): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(189): Model_Product->getProductParams('1037')
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproducts()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-05 16:03:37 --- CRITICAL: ErrorException [ 2 ]: mysql_num_rows() expects parameter 1 to be resource, boolean given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 20 ] in file:line
2015-03-05 16:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_num_rows(...', 'Z:\home\teleant...', 20, Array)
#1 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL\Result.php(20): mysql_num_rows(true)
#2 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\MySQL.php(210): Kohana_Database_MySQL_Result->__construct(true, 'update `product...', false, Array)
#3 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'update `product...', false, Array)
#4 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(1726): Kohana_Database_Query->execute()
#5 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(185): Model_Admin->removeProductParam(Array)
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproducts()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in file:line
2015-03-05 16:19:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Product.php [ 133 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Product.php:133
2015-03-05 16:19:51 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(133): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\teleant...', 133, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(196): Model_Product->getProductInfo('1295')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproducts()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Product.php:133