<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-19 14:15:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0, 25) from `notice` `nt` where `nt`.`status_id` = 1  ) as `page_count` fr' at line 1 [ select `n`.*, (select ceil(count(`nt`.`id`) / limit 0, 25) from `notice` `nt` where `nt`.`status_id` = 1  ) as `page_count` from `notice` `n` where `n`.`category` = '1' and `n`.`status_id` = 1   order by `hour_price` desc limit 0, 25 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-19 14:15:09 --- DEBUG: #0 Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `n`.*, (...', false, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Notice.php(29): Kohana_Database_Query->execute()
#2 Z:\home\morya.lan\www\application\classes\Controller\Category.php(15): Model_Notice->getNotice(Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-19 16:48:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: category_id ~ APPPATH\classes\Controller\Admin.php [ 109 ] in Z:\home\morya.lan\www\application\classes\Controller\Admin.php:109
2015-05-19 16:48:12 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 109, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\morya.lan\www\application\classes\Controller\Admin.php:109
2015-05-19 16:54:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_NoticeSale' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-05-19 16:54:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-19 16:54:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'notice_sale_id' in 'where clause' [ select * from `notice_sale_img` where `notice_sale_id` = '1' and `status_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-19 16:54:58 --- DEBUG: #0 Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Notice.php(148): Kohana_Database_Query->execute()
#2 Z:\home\morya.lan\www\application\classes\Model\Notice.php(118): Model_Notice->getNoticeSaleImg(Array)
#3 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(158): Model_Notice->getNoticeSale(Array)
#4 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-19 16:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: notice_info ~ APPPATH\views\admin_redact_notice_sale.php [ 34 ] in Z:\home\morya.lan\www\application\views\admin_redact_notice_sale.php:34
2015-05-19 16:56:35 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\admin_redact_notice_sale.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 34, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\admin_template.php(197): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(177): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\admin_redact_notice_sale.php:34
2015-05-19 16:57:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'day_price' in 'order clause' [ select `n`.*, (select ceil(count(`nt`.`id`) / 25) from `notice_sale` `nt` where `nt`.`category` = 5 and `nt`.`status_id` = 1) as `page_count` from `notice_sale` `n` where `n`.`category` = 5 and `n`.`status_id` = 1 order by `day_price` asc limit 0, 25 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-19 16:57:18 --- DEBUG: #0 Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select `n`.*, (...', false, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Notice.php(114): Kohana_Database_Query->execute()
#2 Z:\home\morya.lan\www\application\classes\Controller\Category.php(29): Model_Notice->getNoticeSale(Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_sale()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-19 17:25:18 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(original/2_2.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Model\Admin.php [ 222 ] in file:line
2015-05-19 17:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'Z:\home\morya.l...', 222, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Admin.php(222): imagecreatefromjpeg('original/2_2.jp...')
#2 Z:\home\morya.lan\www\application\classes\Model\Admin.php(87): Model_Admin->setWaterMark('original/2_2.jp...')
#3 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(151): Model_Admin->loadNoticeSaleImg(Array, '1')
#4 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2015-05-19 17:25:50 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(/public/img/original/3_2.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Model\Admin.php [ 222 ] in file:line
2015-05-19 17:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'Z:\home\morya.l...', 222, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Admin.php(222): imagecreatefromjpeg('/public/img/ori...')
#2 Z:\home\morya.lan\www\application\classes\Model\Admin.php(87): Model_Admin->setWaterMark('original/3_2.jp...')
#3 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(151): Model_Admin->loadNoticeSaleImg(Array, '1')
#4 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2015-05-19 17:26:09 --- CRITICAL: ErrorException [ 2 ]: imagepng(public/img/mark/original/4_2.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Model\Admin.php [ 235 ] in file:line
2015-05-19 17:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepng(public...', 'Z:\home\morya.l...', 235, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Admin.php(235): imagepng(Resource id #114, 'public/img/mark...')
#2 Z:\home\morya.lan\www\application\classes\Model\Admin.php(87): Model_Admin->setWaterMark('original/4_2.jp...')
#3 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(151): Model_Admin->loadNoticeSaleImg(Array, '1')
#4 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2015-05-19 17:26:39 --- CRITICAL: ErrorException [ 2 ]: imagepng(public/img/mark/original/5_2.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Model\Admin.php [ 235 ] in file:line
2015-05-19 17:26:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagepng(public...', 'Z:\home\morya.l...', 235, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Admin.php(235): imagepng(Resource id #114, 'public/img/mark...')
#2 Z:\home\morya.lan\www\application\classes\Model\Admin.php(87): Model_Admin->setWaterMark('original/5_2.jp...')
#3 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(151): Model_Admin->loadNoticeSaleImg(Array, '1')
#4 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2015-05-19 17:58:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\Admin.php [ 73 ] in file:line
2015-05-19 17:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-19 17:58:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\Admin.php [ 73 ] in file:line
2015-05-19 17:58:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-19 18:02:52 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Model\Admin.php [ 98 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:98
2015-05-19 18:02:52 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(98): Kohana_Core::error_handler(2048, 'Only variables ...', 'Z:\home\morya.l...', 98, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(151): Model_Admin->loadNoticeSaleImg(Array, '1')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:98