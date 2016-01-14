<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-03 14:24:12 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH\classes\Model\Notice.php [ 17 ] in file:line
2015-06-03 14:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'Z:\home\morya.l...', 17, Array)
#1 Z:\home\morya.lan\www\application\classes\Model\Notice.php(17): explode(' ', Array)
#2 Z:\home\morya.lan\www\application\classes\Controller\Category.php(14): Model_Notice->getNotice(Array)
#3 Z:\home\morya.lan\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 Z:\home\morya.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\morya.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\morya.lan\www\index.php(119): Kohana_Request->execute()
#9 {main} in file:line