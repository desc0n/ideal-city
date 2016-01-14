<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-18 15:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: get ~ APPPATH\views\template.php [ 47 ] in Z:\home\scorpion.lan\www\application\views\template.php:47
2015-06-18 15:15:38 --- DEBUG: #0 Z:\home\scorpion.lan\www\application\views\template.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\scorpio...', 47, Array)
#1 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\scorpio...')
#2 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\scorpio...', Array)
#3 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\scorpion.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\scorpion.lan\www\application\classes\Controller\Index.php(24): Kohana_Response->body(Object(View))
#6 Z:\home\scorpion.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_page()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\scorpion.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\scorpion.lan\www\index.php(119): Kohana_Request->execute()
#12 {main} in Z:\home\scorpion.lan\www\application\views\template.php:47
2015-06-18 16:40:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: admin_content ~ APPPATH\classes\Controller\Admin.php [ 182 ] in Z:\home\scorpion.lan\www\application\classes\Controller\Admin.php:182
2015-06-18 16:40:56 --- DEBUG: #0 Z:\home\scorpion.lan\www\application\classes\Controller\Admin.php(182): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\scorpio...', 182, Array)
#1 Z:\home\scorpion.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\scorpion.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\scorpion.lan\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\scorpion.lan\www\application\classes\Controller\Admin.php:182
2015-06-18 16:42:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'srv61715_main.category' doesn't exist [ select * from `category` where 1  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-18 16:42:15 --- DEBUG: #0 Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\scorpion.lan\www\application\classes\Model\Admin.php(22): Kohana_Database_Query->execute()
#2 Z:\home\scorpion.lan\www\application\classes\Controller\Admin.php(44): Model_Admin->getCategory()
#3 Z:\home\scorpion.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\scorpion.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\scorpion.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-18 16:56:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: notice_info ~ APPPATH\views\admin_redact_page.php [ 38 ] in Z:\home\scorpion.lan\www\application\views\admin_redact_page.php:38
2015-06-18 16:56:44 --- DEBUG: #0 Z:\home\scorpion.lan\www\application\views\admin_redact_page.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\scorpio...', 38, Array)
#1 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\scorpio...')
#2 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\scorpio...', Array)
#3 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\scorpion.lan\www\application\views\admin_template.php(193): Kohana_View->__toString()
#5 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\scorpio...')
#6 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\scorpio...', Array)
#7 Z:\home\scorpion.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\scorpion.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\scorpion.lan\www\application\classes\Controller\Admin.php(114): Kohana_Response->body(Object(View))
#10 Z:\home\scorpion.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\scorpion.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\scorpion.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\scorpion.lan\www\application\views\admin_redact_page.php:38
2015-06-18 17:08:23 --- CRITICAL: Database_Exception [ 1146 ]: Table 'srv61715_main.notice_img' doesn't exist [ select last_insert_id() as `new_id` from `notice_img` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-18 17:08:23 --- DEBUG: #0 Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select last_ins...', false, Array)
#1 Z:\home\scorpion.lan\www\application\classes\Model\Admin.php(43): Kohana_Database_Query->execute()
#2 Z:\home\scorpion.lan\www\application\classes\Controller\Admin.php(50): Model_Admin->loadPageImg(Array, '1')
#3 Z:\home\scorpion.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\scorpion.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\scorpion.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-18 17:12:13 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\image\classes\Kohana\Image\GD.php [ 200 ] in file:line
2015-06-18 17:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-18 17:19:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'srv61715_main.category' doesn't exist [ select * from `category` where 1  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-18 17:19:05 --- DEBUG: #0 Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 Z:\home\scorpion.lan\www\application\classes\Model\Admin.php(22): Kohana_Database_Query->execute()
#2 Z:\home\scorpion.lan\www\application\classes\Controller\Index.php(11): Model_Admin->getCategory()
#3 Z:\home\scorpion.lan\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\scorpion.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\scorpion.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\scorpion.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\scorpion.lan\www\modules\database\classes\Kohana\Database\Query.php:251