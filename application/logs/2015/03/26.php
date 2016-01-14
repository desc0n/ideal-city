<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-26 14:14:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'check_status' in 'where clause' [ select `p`.*,
			(select `src` from `products_imgs` `pi` where `pi`.`product_id` = `p`.`id` and  `pi`.`status_id` = 1 limit 0,1) as `product_img`,
			(select `b`.`name` from `brands` `b` where `b`.`id` = `brand_id` and `b`.`status_id` = 1 limit 0,1) as `brand_name`,
			(select `g1`.`name` from `products_group_1` `g1` where `g1`.`id` = `group_1` limit 0,1) as `group_1_name`,
			(select `g2`.`name` from `products_group_2` `g2` where `g2`.`id` = `group_2` limit 0,1) as `group_2_name`,
			(select `g3`.`name` from `products_group_3` `g3` where `g3`.`id` = `group_3` limit 0,1) as `group_3_name`,
			ifnull(
				(select count(`g1`.`id`) from `products_group_1` `g1` where `g1`.`id` = `group_1` and `g1`.`status_id` = 1 limit 0,1),
				ifnull(
					(select count(`g2`.`id`) from `products_group_2` `g2` where `g2`.`id` = `group_2` and `g2`.`status_id` = 1 limit 0,1),
					ifnull(
						(SELECT COUNT(`g3`.`id`) FROM `products_group_3` `g3` WHERE `g3`.`id` = `group_3` AND `g3`.`status_id` = 1 LIMIT 0,1),
						0
					)
				)
			) as `check_status`
			from `products` `p`
			where `p`.`group_1` = '5'
			and  `p`.`status_id` = 1
			and `check_status` = 0
			order by `group_2_name`,`brand_name` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 14:14:56 --- DEBUG: #0 Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `p`.*,??...', false, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Model\Product.php(136): Kohana_Database_Query->execute()
#2 Z:\home\teleantenna.lan\www\application\views\catalog.php(19): Model_Product->getProductList(Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\teleantenna.lan\www\application\views\template.php(337): Kohana_View->__toString()
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#8 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#11 Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php(30): Kohana_Response->body(Object(View))
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#15 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#18 {main} in Z:\home\teleantenna.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-03-26 14:21:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: check_status ~ APPPATH\views\catalog_table.php [ 19 ] in Z:\home\teleantenna.lan\www\application\views\catalog_table.php:19
2015-03-26 14:21:19 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\views\catalog_table.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\teleant...', 19, Array)
#1 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#3 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\teleantenna.lan\www\application\views\catalog.php(19): Kohana_View->__toString()
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#7 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\teleantenna.lan\www\application\views\template.php(337): Kohana_View->__toString()
#9 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\teleant...')
#10 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\teleant...', Array)
#11 Z:\home\teleantenna.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 Z:\home\teleantenna.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#13 Z:\home\teleantenna.lan\www\application\classes\Controller\Catalog.php(30): Kohana_Response->body(Object(View))
#14 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#17 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#20 {main} in Z:\home\teleantenna.lan\www\application\views\catalog_table.php:19