<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-16 09:26:34 --- CRITICAL: View_Exception [ 0 ]: The requested view redact_notice could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\morya.lan\www\system\classes\Kohana\View.php:137
2015-05-16 09:26:34 --- DEBUG: #0 Z:\home\morya.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('redact_notice')
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('redact_notice', NULL)
#2 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(112): Kohana_View::factory('redact_notice')
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\system\classes\Kohana\View.php:137
2015-05-16 09:43:18 --- CRITICAL: View_Exception [ 0 ]: The requested view redact_notice could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\morya.lan\www\system\classes\Kohana\View.php:137
2015-05-16 09:43:18 --- DEBUG: #0 Z:\home\morya.lan\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('redact_notice')
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('redact_notice', NULL)
#2 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(113): Kohana_View::factory('redact_notice')
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\system\classes\Kohana\View.php:137
2015-05-16 09:43:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Product' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-05-16 09:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 09:44:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: notice_id ~ APPPATH\views\admin_redact_notice.php [ 30 ] in Z:\home\morya.lan\www\application\views\admin_redact_notice.php:30
2015-05-16 09:44:51 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\admin_redact_notice.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 30, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\admin_template.php(197): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\admin_redact_notice.php:30
2015-05-16 09:45:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: noticeParams ~ APPPATH\views\admin_redact_notice.php [ 52 ] in Z:\home\morya.lan\www\application\views\admin_redact_notice.php:52
2015-05-16 09:45:25 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\admin_redact_notice.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 52, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\admin_template.php(197): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(123): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\admin_redact_notice.php:52
2015-05-16 10:11:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::redactNotice() ~ APPPATH\classes\Controller\Admin.php [ 130 ] in file:line
2015-05-16 10:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 10:22:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::redactNotice() ~ APPPATH\classes\Controller\Admin.php [ 130 ] in file:line
2015-05-16 10:22:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 10:22:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Admin::setNotise() ~ APPPATH\classes\Controller\Admin.php [ 130 ] in file:line
2015-05-16 10:22:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 10:24:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'moryav_main.notice_imgs' doesn't exist [ insert into `notice_imgs` (`notice_id`) values ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-16 10:24:45 --- DEBUG: #0 Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'insert into `no...', false, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Admin.php(43): Kohana_Database_Query->execute()
#2 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(116): Model_Admin->loadNoticeImg(Array, '1')
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-16 10:25:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'moryav_main.notice_img' doesn't exist [ select * from `notice_img` where `notice_id` = '1' LIMIT 0,1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-05-16 10:25:08 --- DEBUG: #0 Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Notice.php(62): Kohana_Database_Query->execute()
#2 Z:\home\morya.lan\www\application\classes\Model\Notice.php(24): Model_Notice->getNoticeImg(Array)
#3 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(123): Model_Notice->getNotice(Array)
#4 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#10 {main} in Z:\home\morya.lan\www\modules\database\classes\Kohana\Database\Query.php:251