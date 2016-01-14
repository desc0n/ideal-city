<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-20 17:09:18 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\Arr.php [ 277 ] in Z:\home\morya.lan\www\system\classes\Kohana\Arr.php:277
2015-05-20 17:09:18 --- DEBUG: #0 Z:\home\morya.lan\www\system\classes\Kohana\Arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\morya.l...', 277, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Admin.php(41): Kohana_Arr::get(Array, Array)
#2 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in Z:\home\morya.lan\www\system\classes\Kohana\Arr.php:277
2015-05-20 17:10:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: imgname ~ APPPATH\classes\Model\Admin.php [ 50 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:10:29 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 50, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:11:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tmp_name ~ APPPATH\classes\Model\Admin.php [ 52 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:52
2015-05-20 17:11:24 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 52, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:52
2015-05-20 17:11:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tmp_name ~ APPPATH\classes\Model\Admin.php [ 52 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:52
2015-05-20 17:11:46 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 52, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:52
2015-05-20 17:12:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: imgname ~ APPPATH\classes\Model\Admin.php [ 50 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:12:15 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 50, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:12:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: imgname ~ APPPATH\classes\Model\Admin.php [ 50 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:12:39 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 50, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:15:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: imgname ~ APPPATH\classes\Model\Admin.php [ 50 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:15:08 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\morya.l...', 50, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:50
2015-05-20 17:20:52 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\classes\Model\Admin.php [ 43 ] in Z:\home\morya.lan\www\application\classes\Model\Admin.php:43
2015-05-20 17:20:52 --- DEBUG: #0 Z:\home\morya.lan\www\application\classes\Model\Admin.php(43): Kohana_Core::error_handler(2, 'Illegal string ...', 'Z:\home\morya.l...', 43, Array)
#1 Z:\home\morya.lan\www\application\classes\Controller\Admin.php(122): Model_Admin->loadNoticeImg(Array, '3')
#2 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_control_panel()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\morya.lan\www\application\classes\Model\Admin.php:43
2015-05-20 17:36:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: get ~ APPPATH\views\item.php [ 5 ] in Z:\home\morya.lan\www\application\views\item.php:5
2015-05-20 17:36:33 --- DEBUG: #0 Z:\home\morya.lan\www\application\views\item.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\morya.l...', 5, Array)
#1 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#2 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\morya.lan\www\application\views\template.php(49): Kohana_View->__toString()
#5 Z:\home\morya.lan\www\system\classes\Kohana\View.php(61): include('Z:\home\morya.l...')
#6 Z:\home\morya.lan\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\morya.l...', Array)
#7 Z:\home\morya.lan\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\morya.lan\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 Z:\home\morya.lan\www\application\classes\Controller\Item.php(14): Kohana_Response->body(Object(View))
#10 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Item->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Item))
#13 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#16 {main} in Z:\home\morya.lan\www\application\views\item.php:5