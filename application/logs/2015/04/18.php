<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-18 14:04:12 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Users::getUsersProfile(), called in Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php on line 720 and defined ~ APPPATH\classes\Model\Users.php [ 86 ] in Z:\home\teleantenna.lan\www\application\classes\Model\Users.php:86
2015-04-18 14:04:12 --- DEBUG: #0 Z:\home\teleantenna.lan\www\application\classes\Model\Users.php(86): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\teleant...', 86, Array)
#1 Z:\home\teleantenna.lan\www\application\classes\Controller\Admin.php(720): Model_Users->getUsersProfile()
#2 Z:\home\teleantenna.lan\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_contractor()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\teleantenna.lan\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\teleantenna.lan\www\index.php(119): Kohana_Request->execute()
#8 {main} in Z:\home\teleantenna.lan\www\application\classes\Model\Users.php:86