<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-21 07:40:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin_redact_products_num.php [ 45 ] in file:line
2014-12-21 07:40:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-21 07:46:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search_data ~ APPPATH\views\admin_redact_products_num.php [ 45 ] in Z:\home\teleantenna.lan\www\application\views\admin_redact_products_num.php:45
2014-12-21 07:46:31 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\admin_redact_products_num.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\teleant...', 45, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\admin_template.php(218): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(170): Kohana_Response->body(Object(View))
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproductsnum()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\teleantenna.lan\www\application\views\admin_redact_products_num.php:45
2014-12-21 07:51:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'poduct_id' in 'where clause' [ update `products_num` set `num` = '4' where `poduct_id` = '4' and `shop_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-12-21 07:51:17 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'update `product...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Admin.php(284): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(155): Model_Admin->setProductNum(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_redactproductsnum()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-12-21 16:17:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_AS ~ APPPATH\views\catalog.php [ 46 ] in file:line
2014-12-21 16:17:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-21 16:23:48 --- CRITICAL: Database_Exception [ 1146 ]: Table 'teleante_main.product_imgs' doesn't exist [ select `p`.*,(select `src` from `product_imgs` `pi` where `pi`.`product_id` = `p`.`id` limit 0,1) as `product_img` from `products` `p` where `p`.`group_1` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2014-12-21 16:23:48 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `p`.*,(s...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(48): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\views\catalog.php(46): Model_Product->getProductList(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\teleantenna.lan\www\application\views\template.php(391): Kohana_View->__toString()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php(14): Kohana_Response->body(Object(View))
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\teleantenna.lan\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251